<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Quiz;
use App\Models\Mcq;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    function welcome()
    {
        $categories = category::withCount('quizzes')->get();
        return view('welcome', ['categories' => $categories]);
    }

    function userquizlist($id, $category)
    {
        $quizdata = Quiz::withCount('Mcq')->where('category_id', $id)->get();
        return view('user-quiz-list', [
            "quizdata" => $quizdata,
            "category" => $category
        ]);
    }
    function startquiz($id, $name)
    {
        $quizcount = Mcq::where('quiz_id', $id)->count();
        $quizname = $name;
        return view('user-start-quiz', [
            "quizcount" => $quizcount,
            "quizname" => $quizname
        ]);
    }
    public function usersignup(Request $request)
    {
        // Validation
        $request->validate([
            'name'     => 'required|min:3',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:3|confirmed',
        ]);

        // Insert User
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if ($user) {
            Session::put('user', $user);
            if (Session::has('quiz-url')) {
                $url = Session::get('quiz-url');
                Session::forget('quiz-url');
                return redirect($url)->with('message',"User registered successfully");
            }
            return redirect('/')->with('message',"User registered successfully");
        }
    }
    function userlogout()
    {
        Session::forget('user');
        return redirect('/');
    }
    function quizstart()
    {
        Session::put('quiz-url', url()->previous());
        return view('user-signup');
    }
    public function userlogin(Request $request)
    {
        // Validation
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

       $user = User::where('email',$request->email)->first();
       if(!$user || !Hash::check($request->password,$user->password)){
        return "user not valid, please check email and password again";
       }
        if ($user) {
            Session::put('user', $user);
            if (Session::has('quiz-url')) {
                $url = Session::get('quiz-url');
                Session::forget('quiz-url');
                return redirect($url)->with('message',"User Login successfully");
            }
            return redirect('/')->with('message',"User Login successfully");
        }
    }
           function userloginquiz(){
            Session::put('quiz-url', url()->previous());
            return view('user-login');
           }
}
