<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\Quiz;
use App\Models\Mcq;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function welcome(){
        $categories =category::withCount('quizzes')-> get();
        return view('welcome',['categories'=>$categories]);
    }

    function userquizlist($id,$category){
        $quizdata = Quiz::where('category_id', $id)->get();
        return view('user-quiz-list', [
            "quizdata" => $quizdata,
            "category" => $category
        ]);
 }
  function startquiz($id,$name){
    $quizcount = Mcq::where('quiz_id',$id)->count();
    $quizname = $name;
    return view('user-start-quiz',[
        "quizcount"=>$quizcount,
        "quizname"=>$quizname
    ]);
  }
}
