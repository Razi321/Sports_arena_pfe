<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $feedbacks = Feedback::orderBy('created_at','desc')->paginate(5);
        return view('feedback.index')->with('feedbacks', $feedbacks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'body' => 'required',

    ]);


    // Create feedback
    $feedback = new feedback;
    $feedback->body = $request->input('body');
    $feedback->user_id = auth()->user()->id;
    $feedback->belongs_To = auth()->user()->member_in;
    $feedback->save();

    return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $feedback = Feedback::find($id);
        return view('feedback.show')->with('feedback', $feedback);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedback = Feedback::find($id);


        return view('feedback.edit')->with('post', $feedback);
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
        $this->validate($request, [

            'body' => 'required'
        ]);
		$feedback = Feedback::find($id);


        $feedback->body = $request->input('body');

        $feedback->save();

        return redirect('/feedback')->with('success', 'avis bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::find($id);


        $feedback->delete();
        return back();

    }
}
