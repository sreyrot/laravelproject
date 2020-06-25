<?php
namespace App\Http\Controllers;
use App\User;
use App\Student;
use App\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    public function addComment(Request $request,$id)
{
    $students = Student::find($id);
    $user = User::find(auth::id());
    $comment = new Comment;
    $comment->comment = $request->cmt;
    $comment->user_id = $user->id;
    $comment->student_id=$students->id;
    $comment->save();
    return back();
}


public function delete($id)
{
 $user_id = Auth::id();
 $comment = Comment::where('id', $id)->where('user_id',$user_id)->first(); // you need to fetch the data
//wrap if statement to check data exist or not
  if(!is_null($comment)){
  //execute if exist
  $comment->delete();
  }
return back();

}


public function updatecomment($id, Request $request)
{   

    $user_id = Auth::id();
    $comment = Comment::where('id', $id)->where('user_id',$user_id)->first();
  if(!is_null($comment)){
      $comment->comment = $request->get('comment');
      $comment ->save();
  }
    return back();
}

}