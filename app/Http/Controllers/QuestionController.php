<?php

namespace App\Http\Controllers;


use App\Models\Question;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class QuestionController extends BaseController
{
    public function addQuestion(Request $request){
        $question=new Question;
        $question->name=$request->input('name');
        $question->description=$request->input('description');
        $question->content=$request->input('content');
        $question->userId=$request->input('userId');

        $file=$request->file('file');
        if ($file) {
            $name = $file->getClientOriginalName(); // 文件原名

            $ext = $file->getClientOriginalExtension();     // 扩展名
            $request->file('photo')->move('app/uploads/homework/');
            $question->file=$name.$ext;
        }

        $question->save();
        echo 'success';
    }

    public function getAllQuestions(){
        $questions=Question::all();
        echo $questions;
    }

}
