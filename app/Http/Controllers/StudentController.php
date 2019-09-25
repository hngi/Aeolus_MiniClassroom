<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Courseroom;
use App\Courseitems;

class StudentController extends Controller
{
    //

    public function studentJoinCourseRoom(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id'       => 'required|numeric',
            'role_id'       => 'required|numeric',
            'joined'        => 'required|numeric',
            'courseroom_id' => 'required|numeric'
        ]);

        if($validator->fails()){
            return response()->json(['message'=>'Empty Field(s)', 'status'=>403], 403);
        }else{
            try {
                $roleID = $request->input('role_id');
                if($roleID != 2){
                    return response()->json(['message'=>'Unauthorised User', 'status'=>403], 403);
                }else{
                    $courseroomItems = Courseitem::findorfail($request->input('courseroom_id'));
                    $CourseData = new Courseitem();
                    $CourseData->student_id = $request->input('user_id');
                    $CourseData->joined     = $request->input('joined');
                    if($courseroomItems->fill($CourseData)->save()){
                        return response()->json(['message'=>'You Joined A Class!', 'status'=>200], 200);
                    }else{
                        return response()->json(['message'=>'Error Joining!', 'status'=>403], 403); 
                    }
                    
                }

            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
    }

    public function displayListOfCoursesToStudent()
    {
        // todo
    }
}
