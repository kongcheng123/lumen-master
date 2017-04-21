<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/version', function () use ($app) {
    return $app->version();
});

$app->get('/','Controller@test');

/*
 * 用户路由
 */

$app->post('/addUser','UserController@addUser');

$app->post('/checkUser','UserController@checkUser');


/*
 * 教师路由
 */

$app->post('/addTeacher','TeacherController@addTeacher');

$app->post('/checkTeacher','TeacherController@checkTeacher');


/*
 *问题路由
 */

$app->post('/addQuestion','QuestionController@addQuestion');

$app->get('/getAllQuestions','QuestionController@getAllQuestions');
