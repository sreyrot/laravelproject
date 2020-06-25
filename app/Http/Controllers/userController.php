<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Position;
class userController extends Controller
{
    public function view(){
        $users = User::all();
        // return view('alluser.view', compact('users'));
        return view('alluser.view', compact('users'));
    }

   
    public function register(Request $request){
        return view('auth.register');
    }
    public function registeruser(Request $request){
        
        $users = new User;
        $users->firstName = $request->fname;
        $users->lastName = $request->lname;
        $users->role = $request->role;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->password_confirmation = Hash::make($request->password_confirmation);
        $users->position_id = $request->position;
        
        $users->save();
        return redirect('view');
        // dd($users);
    }
    public function delete($id){
        $users = User::find($id);
        $users -> delete();
        return redirect('view');
    }

    public function viewformedituser($id){
        $users = User::find($id);
        return view('alluser.edituserform', compact('users'));
    }
    public function update($id, Request $request){

        $users = User::find($id);
        $users->firstName = $request->get('fname');
        $users->lastName = $request->get('lname');
        $users->email = $request->get('email');
        $users->password = Hash::make($request->get('pwd'));
        $users->role = $request->get('role');
        $users->position_id = $request->get('position');
        $users -> save();
        return redirect('view');
    }
}
