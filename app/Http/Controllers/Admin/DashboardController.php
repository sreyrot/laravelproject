<?php

namespace App\Http\Controllers\Admin;
use App\Student;
use App\User;
use Datatable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   
    public function index(Request $request){
      
        $student = Student::all();
        $user = User::all();
       
        return view('admin/dashboard')->with(compact('user', $user))->with(compact('student', $student));
       
    }
   
}
