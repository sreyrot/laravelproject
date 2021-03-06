<?php

namespace App\Http\Controllers\User;
use Datatable;
use App\Student;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        $student = Student::all();
        $user = User::all();
        return view('user/dashboard')->with(compact('student', $student))->with(compact('user', $user));
    }

}
