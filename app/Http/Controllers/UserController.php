<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;


class UserController extends BaseController
{

    public function addUser(Request $request){

        $user=new User;
        $user->name=$request->input('name');
        $user->pwd=$request->input('pwd');
        $user->save();
        echo 'success';
    }

    //登录,检验用户名和密码对不对
    public function checkUser(Request $request){
        $name=$_POST['name'];
        $pwd=$_POST['pwd'];
        $user=User::where(['name'=>$name,'pwd'=>$pwd])->first();
        //echo "登陆成功";
        if($user!=null){
            //Session::put('login',$user);
            echo "登陆成功";
        }else{
            echo "请输入正确的用户名或密码";
        }
    }


}
