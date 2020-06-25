<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\User;
use Auth;
use Image;
class studentForUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('user.formaddstudent');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $user = User::find(Auth::user()->id);
    //     $students = new Student;
    //     $students->firstname = $request->fname;
    //     $students->lastname = $request->lname;
    //     $students->class = $request->class;
    //     $students->description = $request->description;
    //     $students->picture = $request->picture;
    //     $students->user_id = $request->get('tutor');
    //     $img = $request->file('picture');
    //     $filename = time() . '.' . $img->getClientOriginalExtension();
    //     $location = public_path('image/'.$filename);
    //     Image::make($img)->resize(100,100)->save($location);
    //     $students->picture = $filename;

    //     $students ->user_id = $user->id;
    //     $students ->save();
       
    //    return back();
      
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::find($id);
        return view('student.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $students = Student::find($id);
    //     return view('user.formeditnormal',compact('students'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $students = Student::find($id);

    //     $students->firstname = $request->get('fname');
    //     $students->lastname = $request->get('lname');
    //     $students->class = $request->get('class');
    //     $students->description = $request->get('description');
    //     $img = $request->file('picture');
    //     $filename = time() . '.' . $img->getClientOriginalExtension();
    //     $location = public_path('image/'.$filename);
    //     Image::make($img)->resize(100,100)->save($location);
    //     $students->picture = $filename;
    //     $students -> save();
    //     return redirect('user/dashboard');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $students = Student::find($id);
    //   $students -> delete();
    //   return redirect('user/dashboard');
    // }
}
