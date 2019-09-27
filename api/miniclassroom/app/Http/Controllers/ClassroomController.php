<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Courseroom;
use App\Courseitems;

class ClassroomController extends Controller
{
    //
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
                //request the course icon for display
                $icon                   = $request->file('icon');
                $extension              = $icon->getClientOriginalExtension();
                Storage::disk('public')->put($icon->getFilename().'.'.$extension,  File::get($icon));

                $classroom->icon = $icon->getFIlename().'.'.$extension;
                //

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
        $arr = [];
        $data = Courseroom::where('user_id', '=', $id)->get();
        if(!empty($data)){
            foreach($data as $key=>$value){
                $arr[$key]['id']            = $value['id'];
                $arr[$key]['courseroom']    = $value['classroom'];
                $arr[$key]['icon']          = $value['icon'];
            }
            return response()->json(['message'=>'Success!', 'status'=>200, 'data'=>$arr], 200);
        }else{
            return response()->json(['message'=>'No Record!', 'status'=>403], 403);
        }
        
    }

    public function editCourseRoom($id, Request $request)
    {
        $course = Courseroom::findorfail($id);
        
        $validator = Validator::make($request->all(), [
            'classroom'=> 'required'
        ]);

        if($validator->fails()){
            return response()->json(['message'=>'Empty Field(s)', 'status'=>403], 403);
        }else{
            try {
                $editData = $request->all();
                if($course->fill($editData)->save()){
                    return response()->json(['message'=>'Record Updated', 'status'=>200], 200);
                }else{
                    return response()->json(['message'=>'Error Updating', 'status'=>403], 403);
                }

            } catch(Exception $e) {
                return $e->getMessage();
            }
        }

    }

    public function deleteCourseRoom($id)
    {
        $course = Courseroom::findorfail($id);
        if(!empty($course)){
            $course->delete();
            return response()->json(['message'=>'Course Deleted', 'status'=>200], 200);
        }else{
            return response()->json(['message'=>'Error Deleting', 'status'=>403], 403);
        }
        
    }

    public function createCourseItem(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'courseroom_id' => 'required|numeric',
            'user_id'       => 'required|numeric',
            'role_id'       => 'required|numeric',
            'course_title'  => 'required|min:2|max:50',
            'course_desc'   => 'required|min:2',
            'duration'      => 'required|numeric'
          ]);

          if($validator->fails()){
            return response()->json(['message'=>'Empty Field(s)', 'status'=>403], 403);
          }else{
              try{
                  $media = $request->file('media');
                  $extension              = $media->getClientOriginalExtension();
                  Storage::disk('public')->put($media->getFilename().'.'.$extension,  File::get($media));
                  $courseItems = new Courseitems();
                  $courseItems->user_id         = $request->input('user_id');
                  $courseItems->role_id         = $request->input('role_id');
                  $courseItems->course_title    = $request->input('course_title');
                  $courseItems->course_desc     = $request->input('course_desc');
                  $courseItems->duration        = $request->input('duration');
                  $courseItems->media           = $media->getFilename().'.'.$extension;

                  if($courseItems->save()){
                      return response()->json(['message'=>'Course Items Created!', 'status'=>200], 200);
                  }else{
                      return response()->json(['message'=>'Error Creating', 'status'=>403], 403);
                  }

              } catch (Exception $e){
                  return $e->getMessage();
              }
          }
    }

    public function listAllCourseItem($tutorid, $courseid)
    {
        //todo

    }

    public function editCourseItem()
    {
        //todo

    }
    
    public function deleteCourseItem()
    {
        //todo
    }

    public function viewStudentLearningCourseItem()
    {
        //todo

    }
}
