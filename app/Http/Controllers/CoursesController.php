<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('created_at','desc')->paginate(5);

        return view('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
            'description'=> 'required' ,
            'duration' => 'required' ,
            'frequency' => 'required' ,
            'target' => 'required' ,
            'outfit' => 'required' ,
            'price_month' => 'required' ,
            'price_session' => 'required' ,
            'image' => 'image|nullable|max:1999'

        ]);

       // Handle File Upload
       if($request->hasFile('image')){
        // Get filename with the extension
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('image')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('image')->storeAs('public/courses_images', $fileNameToStore);
    } else {
        $fileNameToStore = 'noimage.jpg';
    }


        //create course
        $course = new Course;
        $course ->name =$request->input('name');
        $course ->description =$request->input('description');
        $course ->duration =$request->input('duration');
        $course ->frequency =$request->input('frequency');
        $course ->target=$request->input('target');
        $course ->outfit =$request->input('outfit');
        $course ->price_month =$request->input('price_month');
        $course ->price_session=$request->input('price_session');
        $course ->id_gym=auth()->user()->member_in;
        $course->image = $fileNameToStore;
        $course->save();
        return redirect('/courses')->with('success','cour bien ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show')->with('course',$course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit')->with('course',$course);
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
            'description'=> 'required' ,
            'duration' => 'required' ,
            'frequency' => 'required' ,
            'target' => 'required' ,
            'outfit' => 'required' ,
            'price_month' => 'required' ,
            'price_session' => 'required' ,



        ]);

        $course = Course::find($id);

        // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/courses_images', $fileNameToStore);
            // Delete file if exists
            Storage::delete('public/courses_images/'.$course->image);
        }



        //create post

        $course ->name =$request->input('name');
        $course ->description =$request->input('description');
        $course ->duration =$request->input('duration');
        $course ->frequency =$request->input('frequency');
        $course ->target=$request->input('target');
        $course ->outfit =$request->input('outfit');
        $course ->price_month =$request->input('price_month');
        $course ->price_session=$request->input('price_session');

        if($request->hasFile('image')){
            $course->image = $fileNameToStore;
        }


        $course->save();
return redirect('/courses')->with('success',' cour modifié avec succès');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);


        if($course->image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/courses_images/'.$course->image);
        }

        $course->delete();

            return redirect('/courses')->with('success','le cour est supprimé');

    }
}
