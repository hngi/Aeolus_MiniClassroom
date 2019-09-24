<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Classroom;
use App\Classroom_items;

class ClassroomController extends Controller
{
    

    public function createClass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'classroom' => 'required|unique:Classroom'
        ]);

        if($validator->fails()){
            return response()->json(['message'=>'Error', 'status'=>403], 403);
        }else{
            try{
                $classroom = new Classroom();
                $classroom->user_id     = $request->input('user_id');
                $classroom->role_id     = $request->input('role_id');
                $classroom->classroom   = $request->input('classroom');
                if($classroom->save()){
                    $response = ['status'=>200, 'message'=>'Success'];
                    return response()->json($response, 200);
                }
                $response = ['status'=>403, 'message'=>'Cannot Create Class'];
                return response()->json($response, 403);
                
            }catch(Exception $e){
                return $e->getMessage();
            }
        }

    }

    public function createCourse()
    {

    }

   

     
}
