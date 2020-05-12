<?php

namespace App\Http\Controllers;
use App\Membership;
use Illuminate\Http\Request;

class MembershipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membership = Membership::orderBy('created_at','desc')->paginate(5);

        return view('memberships.index')->with('membership', $membership);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('memberships.create');
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
            'course_id' => 'required' ,
            'end_at' => 'required' ,
        ]);


        //create membership
        $membership = new Membership;
        $membership->course_id =$request->input('course_id');
        $membership->end_at =$request->input('end_at');
        $membership ->gym_id =auth()->user()->member_in;
        $membership ->user_id=$request->input('user_id');
        $membership->save();
        return back()->with('success','Abonnement a été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membership = Membership::find($id);
        return view('memberships.show')->with('membership',  $membership);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membership = Membership::find($id);
        return view('memberships.edit')->with('membership',  $membership);
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
            'course_id' => 'required' ,
            'end_at' => 'required' ,
        ]);

        $membership = Membership::find($id);

        $membership->course_id =$request->input('course_id');
        $membership->end_at =$request->input('end_at');
        $membership->save();
        return back()->with('success','Abonnement a été modifié');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membership = Membership::find($id);
        $membership->delete();
        return redirect('memberships')->with('success','abonnement a été supprimé');
    }
}
