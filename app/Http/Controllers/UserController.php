<?php

namespace App\Http\Controllers;

use App\Models\Token;
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
            $token=new Token;
            $token->userId=$user->id;
            $token->content=$this->getRandom();

            $token->save();

            echo $token->content;
        }else{
            echo "请输入正确的用户名或密码";
        }
    }

    public function getRandom(){
        // 密码字符集，可任意添加你需要的字符
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_ []{}<>~`+=,.;:/?|';
        $password = '';
        for ( $i = 0; $i < 12; $i++ )
        {
        // 这里提供两种字符获取方式
        // 第一种是使用 substr 截取$chars中的任意一位字符；
        // 第二种是取字符数组 $chars 的任意元素
        // $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);
            $password .= $chars[ mt_rand(0, strlen($chars) - 1) ];
        }
        return $password;
    }


}
