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
}
