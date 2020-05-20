<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('created_at','desc')->paginate(5);

        return view('posts.index')->with('post', $post);
    }
    public function indexp()
    {
        $post = Post::all();

        return response()->json($post);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
            'video' => 'mimetypes:video/avi,video/mpeg,video/mp4|nullable'


        ]);


      // Handle File Upload
      if($request->hasFile('video')){
        // Get filename with the extension
        $filenameWithExt = $request->file('video')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('video')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('video')->storeAs('public/videos', $fileNameToStore);
    } else {
        $fileNameToStore = 'novideo.jpg';
    }


        //create u
        $post = new Post;
        $post ->gym_id =auth()->user()->member_in;
        $post ->body =$request->input('body');
        $post ->title =$request->input('title');
        $post->video = $fileNameToStore;
        $post->save();
        return redirect('/posts')->with('success','jouté');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);


        if($post->video!= 'novideo.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$post->video);
        }

        $post->delete();


        return redirect('/posts')->with('success','le post est supprimé');
    }
    }

