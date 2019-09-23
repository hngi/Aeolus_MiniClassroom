<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\User_Role;
use App\Role;



class UserController extends Controller
{
    //

    public function signUp(Request $request)
    {
        // $request->validate([
        //     'fullname'=>'required|min:3|max:50',
        //     'email'=>'required|email|unique',
        //     'password'=>'required|min:4'
        // ]);

        $user = new User();
        $user->fullname     = $request->input('fullname');
        $user->email        = $request->input('email');
        $user->password     = bcrypt($request->input('password'));
        $user->save();

        // $roleUser = new User_Role();
        // $roleUser->user_id = Auth::User();
        // $roleUser->role_id = $request->input('role');
        // $roleUser->save();

        return response()->json(['msg'=>'working'], 200);
      
        

    }

    public function signIn()
    {

    }

    public function logOut()
    {

    }
}
