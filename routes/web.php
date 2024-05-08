<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentController;

//session3task
Route::get('addStudent', [StudentController::class,'create']);            
Route::post('insertstudent', [StudentController::class,'store'])->name('insertstudent');


//practice 14 // 3rd session
Route::get('clientForm', [Clientcontroller::class, 'create'])  ;
Route::post('insertclient', [Clientcontroller::class,'store'])->name('insertclient');


//Route::get('/', function () { return view('welcome');});

//practice 1 :

// Route::get('soad', function () {
//     return 'welcome to my first web page';
// });

// //practice 2 :

// Route::get('soad/{id}', function ($id) {
//     return 'this is  a parameter ' . $id ;
// });

//practice 3 :

//Route::get('soad/{id?}', function ($id=0) {
//   return 'this is  optional  parameter ' . $id ;
//});

//practice 4 :

//Route::get('soad/{id?}', function ($id=0) {
//           return 'this is  optional  parameter ' . $id ;
//}) -> where(['id'=> '[0-9]+']);

//practice 5 :

//Route::get('soad/{id}', function ($id) {
//             return 'this is  optional  parameter ' . $id ;
//}) -> whereNumber('id');      //كلها ارقام

//practice 6 :

//Route::get('soad/{name}', function ($name) {
//  return 'my name is  :' . $name ;
//}) ->whereAlpha('name');   //كلها حروف

//practice 7 :

//Route::get('soad/{name}', function ($name) {
//  return 'my name is  :' . $name ;
//}) ->whereIn('name',['soad','Mohamed','soma']);   //case sensitive , any limited values

//practice 8 :

//Route::prefix('cars')->group(function () {       //  مهم جدا  وفي طرق كتير منها
    
//   Route::get('bmw', function(){
//    return 'category is BMW ';
//   });

//   Route::get('hummer', function(){
//  return 'category is Hummer ';
//   });

///});

//practice 9 :

//Route::fallback( function () {
//      return 'the req is not found';    //return some thing
//      return redirect('/');             //redirected to home page
//});

//practice 10 :

// Route::get('test20', function () {        // test20 is a url address that excute file called test.blade.php in views
//        return view('test');
// });
    
//practice 11 :

Route::get('form1', function () {            //بتروح لصفحة الفورم
    return view ('form1');
 });

//practice 12 :
                                                //لما ندوس submit
// Route::post('reqform1', function () {        //  مننساش الpost method  بنستلم بيها البيانات من الفورم 
//     //return 'data recieved';
// })->name('recieveform1');                    //  من الافضل  اسم الروت دا يتكتب ف الاكشن بدل ال يو ار ال

Route::post('reqform1', [MyController::class,'recieveData'])->name('recieveform1');


//practice 13 :
Route::get('test20', [MyController::class,'my_data']); //calling a method my_data from class controller called mycontroller



