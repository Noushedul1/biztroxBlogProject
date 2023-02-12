<?php

namespace App\Http\Controllers;

use App\Models\FrontUser;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    public $frontUser;
    public function index($id = null)
    {
        if($id)
        {
            Session::put('blog_id',$id);
        }
        return view('Auth.user-login');
    }
    public function userRegister()
    {
        return view('Auth.user-register');
    }
    public function newuserRegister(Request $request)
    {
        // return $request->all();
        if($request->password == $request->confirm_password)
        {
            $this->frontUser = new FrontUser();
            $this->frontUser->name = $request->name;
            $this->frontUser->email = $request->email;
            $this->frontUser->password = bcrypt($request->password);
            $this->frontUser->save();

            Session::put('user_id',$this->frontUser->id);
            Session::put('user_name',$this->frontUser->name);

            return redirect('/blog-single/'.Session::get('blog_id'));
        }
        else
        {
            return redirect()->back()->with('message','Registration failed');
        }
    }
}
