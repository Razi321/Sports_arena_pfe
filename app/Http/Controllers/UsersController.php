<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class UsersController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $users = User::orderBy('created_at','desc')->paginate(10);

     return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'email' => 'required' ,
            'password' => 'required' ,
            'cover_image' => 'image|nullable|max:1999'

        ]);

       // Handle File Upload
       if($request->hasFile('cover_image')){
        // Get filename with the extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
    } else {
        $fileNameToStore = 'noimage.jpg';
    }


        //create user
        $user = new user;
        $user ->name =$request->input('name');
        $user ->email =$request->input('email');
        $user ->password =$request->input('password');
        $user->cover_image = $fileNameToStore;
        $user->save();
        return redirect('/users')->with('success','utilisateur bien ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {
        $user = User::find($id);
        return view('users.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user',$user);
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
            'name' => ['required',  'min:3'],
            'email' => 'required',
            'role' => 'required'


        ]);

        $user = User::find($id);

        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            // Delete file if exists
            Storage::delete('public/cover_images/'.$user->cover_image);
        }



        //create post

        $user ->role =$request->input('role');
        $user ->name =$request->input('name');
        $user ->member_in = $request->input('member_in');
        $user ->email =$request->input('email');
        $user ->sexe =$request->input('sexe');
        $user ->adresse =$request->input('adresse');
        $user ->date_of_birth =$request->input('date_of_birth');

        if($request->hasFile('cover_image')){
            $user->cover_image = $fileNameToStore;
        }


                    $user->save();
            if(auth()->user()->role =='Admin') {
                return redirect('/users')->with('success',' Role modifié avec succès');
            }
            else
            return redirect('/home')->with('success',' Role modifié avec succès');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);


        if($user->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$user->cover_image);
        }

        $user->delete();
        if($user->role =='Admin') {
            return redirect('/users')->with('success','utilisateur a été supprimé');
        }
        else

        return redirect('/register')->with('success','le compte a été supprimé');
    }

  public function phoneLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        if(Auth::attempt(['email' => $request->json('email'), 'password' => $request->json('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            $success['name'] =  $user->name;
            return response()->json(['success' => $user], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }


}

