<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// for admin's all route
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','Admin@index');
Route::get('/admin/exam_category','Admin@exam_category');
Route::post('admin/add_new_category','Admin@add_new_category');
Route::get('admin/delete_category/{id}','Admin@delete_category');
Route::get('admin/edit_category/{id}','Admin@edit_category');
Route::post('admin/edit_new_category','Admin@edit_new_category');
Route::get('/admin/category_status/{id}','Admin@category_status');
Route::get('admin/manage_exam','Admin@manage_exam');
Route::post('admin/add_new_exam','Admin@add_new_exam');
Route::get('admin/edit_exam/{id}','Admin@edit_exam');
Route::get('admin/exam_status/{id}','Admin@exam_status');
Route::post('admin/edit_new_Exam','Admin@edit_new_Exam');
Route::get('admin/delete_exam/{id}','Admin@delete_exam');
Route::get('admin/manage_students','Admin@manage_students');
Route::post('admin/add_student','Admin@add_student');
Route::get('admin/delete_student/{id}','Admin@delete_student');
Route::get('admin/edit_student/{id}','Admin@edit_student');
Route::get('admin/Student_status/{id}','Admin@Student_status');
Route::post('admin/edit_new_student','Admin@edit_new_student');
Route::get('admin/manage_portal','Admin@manage_portal');
Route::post('admin/add_portal','Admin@add_portal');
Route::get('admin/delete_portal/{id}','Admin@delete_portal');
Route::get('admin/portal_status/{id}','Admin@portal_status');
Route::get('admin/edit_portal/{id}','Admin@edit_portal');
Route::post('admin/edit_new_portal','Admin@edit_new_portal');
Route::get('admin/add_question/{id}','Admin@add_question');
Route::post('admin/add_new_question','Admin@add_new_question');
Route::get('admin/delete_question/{id}','Admin@delete_question');
Route::get('admin/question_status/{id}','Admin@question_status');
Route::get('admin/edit_question/{id}','Admin@edit_question');
Route::post('admin/edit_new_question','Admin@edit_new_question');




// portal 
Route::get('portal/portal_signup','PortalController@portal_signup');
Route::post('portal/signup_sub','PortalController@signup_sub');
Route::get('portal/login','PortalController@login');
Route::post('portal/login_sub','PortalController@login_sub');


Route::get('portal/dashboard','PortalOperation@dashboard');
Route::get('portal/exam_form/{id}','PortalOperation@exam_form');
Route::post('portal/exam_form_submit','PortalOperation@exam_form_submit');
Route::get('portal/print/{id}','PortalOperation@print');
Route::get('portal/update_form','PortalOperation@update_form');
Route::get('portal/student_exam_info','PortalOperation@student_exam_info');
Route::post('portal/update_form_submit','PortalOperation@update_form_submit');
Route::get('portal/logout','PortalOperation@logout');

Route::get('student/login','StudentController@login');
Route::post('student/login_sub','StudentController@login_sub');
Route::get('student/dashboard','StudentOperation@dashboard');
Route::get('student/logout','StudentOperation@logout');
Route::get('student/exams','StudentOperation@exams');
Route::get('student/join_exam/{exam_id}','StudentOperation@join_exam');
