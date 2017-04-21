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

        $question->save();
        echo 'success';
    }

    public function getAllQuestions(){
        $questions=Question::all();
        echo $questions;
    }

}
