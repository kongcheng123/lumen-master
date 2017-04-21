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

    //登录,检验教师名和密码对不对
    public function checkTeacher(Request $request){
        $name=$_POST['name'];
        $pwd=$_POST['pwd'];
        $teacher=Teacher::where(['name'=>$name,'pwd'=>$pwd])->first();
        //echo "登陆成功";
        if($teacher!=null){
            //Session::put('login',$user);
            echo "登陆成功";
        }else{
            echo "请输入正确的用户名或密码";
        }
    }
}
