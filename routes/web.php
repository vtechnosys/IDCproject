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
Route::GET('/', "VertexController@index");


//Client View's Routing...
Route::GET ('workforce-solution',"VertexController@workforcesolution");
Route::GET ('managed-service',"VertexController@managedservice");
Route::GET ('digital-service',"VertexController@digitalservice");
Route::GET ('application-service',"VertexController@applicationservice");
Route::GET ('Home',['as'=>'index','uses'=>"VertexController@index"]);
Route::GET ('About',['as'=>'about','uses'=>"VertexController@aboutget"]);
Route::GET ('Employer',['as'=>'career','uses'=>"VertexController@employer"]);
Route::GET ('Contact',['as'=>'contact','uses'=>"VertexController@contactget"]);
Route::GET ('Job-seeker',['as'=>'Job-seeker','uses'=>"VertexController@Jobseeker"]);
Route::GET ('Industries',['as'=>'portfolio','uses'=>"VertexController@industries"]);
Route::GET ('industries/{name}',['as'=>'portfolio','uses'=>"VertexController@view_industries"]);
Route::GET ('service/{name}',['as'=>'portfolio','uses'=>"VertexController@view_service"]);
Route::GET ('service/{service_name}/{sub_service_name}',['as'=>'portfolio','uses'=>"VertexController@view_sub_service"]);
Route::GET ('Services',['as'=>'services','uses'=>"VertexController@servicesget"]);
Route::GET ('Job-seeker-form',['as'=>'testimonials','uses'=>"VertexController@jobseekerform"]);

Route::post('jonseekerstore',['as'=>'login','uses'=>"VertexController@jonseekerstore"]);

Route::GET ('employer-speek-expert',"VertexController@employerspeekexpert");
Route::POST('employerseekerstore',['as'=>'login','uses'=>"VertexController@employerseekerstore"]);

Route::GET ('employer-job-requirement',"VertexController@employerjobrequirement");
Route::POST ('employerjobrequirementstore',['as'=>'login','uses'=>"VertexController@employerjobrequirementstore"]);
//Dashboard login...
Route::GET ('login',['as'=>'login','uses'=>"AuthController@loginget"]);    //get
Route::POST('login',['as'=>'login','uses'=>"AuthController@login"]);       //post
Route::GET ('logout',['as'=>'logout','uses'=>"AuthController@logout"]);    //logout

//Admin View's Routing...
Route::get('admin/index','AboutController@indexpage');
Route::resource('admin/industries','industriescontroller');
Route::resource('admin/service','servicecontroller');
Route::resource('admin/about', 'AboutController');
Route::resource('admin/services', 'ServiceController');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/portfolios', 'PortController');
Route::resource('admin/testimonials', 'TestiController');
Route::resource('admin/expert_team', 'ExpertTeamController');
Route::resource('admin/careers', 'CareerController');
Route::resource('admin/contact','ContactController');
Route::resource('admin/collage', 'CollageController');
Route::resource('admin/implant_traning_details','ImplantController');

//Implant Traning Code
Route::GET('/implant_training',['as'=>'traning_form','uses'=>"ImplantController@create"]);
Route::POST('/Implant_store',['as'=>'implant_store','uses'=>"ImplantController@store"]);

