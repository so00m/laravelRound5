<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentController;

//student table routes
Route::post('insertstudent', [StudentController::class,'store'])->name('insertstudent');
Route::get('addStudent', [StudentController::class,'create'])->name('addStudent');            
Route::get('students', [StudentController::class,'index'])->name('students');
Route::get('editStudents/{id}', [StudentController::class, 'edit'])->name('editStudent');
Route::put('updateStudents/{id}', [StudentController::class, 'update'])->name('updateStudents');
Route::get('showStudent/{id}', [StudentController::class, 'show'])->name('showStudent');
Route::delete('deleteStudent', [StudentController::class, 'destroy'])->name('deleteStudent');
Route::get('trashStudent', [Studentcontroller::class,'trash'])->name('trashStudent');
Route::get('restoreStudent/{id}', [Studentcontroller::class,'restore'])->name('restoreStudent');
Route::delete('forceDeleteStudent', [Studentcontroller::class, 'forceDelete'])->name('forceDeleteStudent');


//client table routes
Route::post('insertclient', [Clientcontroller::class,'store'])->name('insertclient');
Route::get('addClient', [Clientcontroller::class, 'create'])->name('addClient')  ;
Route::get('clients', [Clientcontroller::class,'index'])->name('clients');
Route::get('editClients/{id}', [Clientcontroller::class, 'edit'])->name('editClient');
Route::put('updateClients/{id}', [Clientcontroller::class, 'update'])->name('updateClients');
Route::get('showClient/{id}', [Clientcontroller::class, 'show'])->name('showClient');
Route::delete('deleteClient', [Clientcontroller::class, 'destroy'])->name('deleteClient');
Route::get('trashClient', [Clientcontroller::class,'trash'])->name('trashClient');
Route::get('restoreClient/{id}', [Clientcontroller::class,'restore'])->name('restoreClient');
Route::delete('forceDeleteClient', [Clientcontroller::class, 'forceDelete'])->name('forceDeleteClient');



//
Route::get('/stacked', function () { return view('stacked');});

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

Route::get('/', function () {            //بتروح لصفحة الفورم
    return view ('stacked');
 });

//practice 12 :
                                                //لما ندوس submit
// Route::post('reqform1', function () {        //  مننساش الpost method  بنستلم بيها البيانات من الفورم 
//     //return 'data recieved';
// })->name('recieveform1');                    //  من الافضل  اسم الروت دا يتكتب ف الاكشن بدل ال يو ار ال

Route::post('reqform1', [MyController::class,'recieveData'])->name('recieveform1');


//practice 13 :
Route::get('test20', [MyController::class,'my_data']); //calling a method my_data from class controller called mycontroller
