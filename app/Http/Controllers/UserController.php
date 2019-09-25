<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\User;
use App\User_Role;
use App\Role;



class UserController extends Controller
{
    //

    /**
     * @param [fullname, email, password, role];
     * @return [status, message]
     * @method signup
     */

    public function signUp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname'  => 'required|min:3',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:4',
            'role'      => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()], 401);
        }else{
            try{
                $user = new User();
                $user->fullname     = $request->input('fullname');
                $user->email        = $request->input('email');
                $user->password     = bcrypt($request->input('password'));
                if($user->save()){
                    $roleUser = new User_Role();
                  
                    $roleUser->user_id = $user->id;
                    $roleUser->role_id = $request->input('role');
                    $roleUser->save();
    
                    $response = ['status'=>'200', 'message'=>'Success'];
                    return response()->json($response, 200);
    
                }
                $response = ['status'=>'403', 'message'=>'Error'];
                return response()->json($response, 403);

            } catch (Exception $e) {
                $e->getMessage();
            }

        }
    }

     /**
     * @param [ email, password];
     * @return [status, message]
     * @method signin
     */

    public function signIn(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'password'  => 'required|min:4'
        ]);

        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()], 401);
        }

        if(Auth::attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')]))
        {
            $user = Auth::user();
            $role_id = User_Role::findorfail($user->id);
            $data = ['fullname'=>$user->fullname, 'role_id'=>$role_id->role_id, 'user_id'=>$user->id];
            return response()->json(['message'=>'Success', 'status'=>200, 'data'=>$data], 200);
        }else{
            return response()->json(['message'=>'Unauthorized'], 403);
        }
    }

  
}
