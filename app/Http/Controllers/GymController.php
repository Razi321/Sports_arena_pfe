<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gym;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gyms = Gym::orderBy('created_at','desc')->paginate(5);

        return view('gyms.index')->with('gyms', $gyms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gyms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request ,[
            'name' => 'required' ,
            'adress' => 'required' ,




        ]);

        //create user
        $gym = new gym;
        $gym ->name =$request->input('name');
        $gym ->price_month =$request->input('price_month');
        $gym ->adress =$request->input('adress');
        $gym ->owner = auth()->user()->id;

        $gym->save();
        return redirect('/gyms')->with('success','salle de sport  ajouter');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gym = Gym::find($id);
        return view('gyms.show')->with('gym',$gym);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gym = Gym::find($id);
        return view('gyms.edit')->with('gym',$gym);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request ,[
            'name' => 'required' ,
            'adress' => 'required'


        ]);


        $gym = Gym::find($id);
        $gym ->name =$request->input('name');
        $gym ->adress =$request->input('adress');
        $gym ->price_month =$request->input('price_month');

        $gym->save();
        return redirect('/gyms')->with('success','salle de sport modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gym = Gym::find($id);

        $gym->delete();
        return redirect('/gyms')->with('success','salle de sport supprimé');
    }
}
