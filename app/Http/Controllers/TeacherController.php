<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class TeacherController extends BaseController
{

    public function addTeacher(Request $request){
        $teacher=new Teacher;
        $teacher->name=$request->input('name');
        $teacher->pwd=$request->input('pwd');

        $teacher->save();
        echo 'success';

    }
}
