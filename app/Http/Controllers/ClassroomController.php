<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Courseroom;
use App\Courseitems;

class ClassroomController extends Controller
{
      /**
     * @param [ user_id, role_id, classroom];
     * @return [status, message]
     * @method createClass
     */

    public function createClass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'classroom' => 'required|unique:courserooms'
        ]);

        if($validator->fails()){
            return response()->json(['message'=>'Empty Field(s)', 'status'=>403], 403);
        }else{
            try{
                $classroom = new Courseroom();
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

     /**
     * @param teacher ID
     * @return [status, message, []]
     * @method listAllCourseRooms
     */

    public function listAllCourseRooms($id)
    {
       $data = Courseroom::where('user_id', '=', $id)->get();
        if(!empty($data)){
            foreach($data as $key=>$value){
                $arr[$key]['id']            = $value['id'];
                $arr[$key]['courseroom']    = $value['classroom'];
            }
            return response()->json(['message'=>'Success!', 'status'=>200, 'data'=>$arr], 200);
        }
        return response()->json(['message'=>'Error', 'status'=>403], 403);
    }

  

  

   

     
}
