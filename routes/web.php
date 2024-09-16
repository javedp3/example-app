<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// function getUsers(){
//     return[
//         1 => ['name' => 'srk','phone'=>'0001','city'=>'aur'],
//         2 => ['name' => 'srk2','phone'=>'0002','city'=>'aur2'],
//         3 => ['name' => 'srk3','phone'=>'0003','city'=>'aur3']
//     ];
// }
// Route::get('/user/{id}',function($id){
//     $users = getUsers();
//     $user = $users[$id];

//     return view('user',['id'=>$user]);
// })->name('view.user');



Route::get('/ho/{id?}', function (string $id=null) {
    //return view('welcome');
if($id){
    return "<h1> Post Id :" . $id ."</h1> ";
}else{
    return "<h1>page not found</h1>";
}
})->whereAlpha('name');

Route::get('/', function(){
    return view('welcome');
})->name('home');

Route::get('/about-us', function () {
    //return "<h1> about pages</h1>";
    return view('aboutus');
})->name('about');

Route::get('/New-post', function(){
    return view('post');
})->name('post');

// controller eg.

Route::get('/',[UserController::class,'showHome'])->name('home');

Route::get('/user/{id}',[UserController::class,'showUser'])->name('user');

Route::get('blog',[UserController::class,'showBlog'])->name('blog');

// controller invokable 

Route::get('/test',TestController::class);

// database controller
Route::get('/first',[FirstController::class,'showFirsts'])->name('first');

Route::get('/firstuser/{id}',[FirstController::class,'singleFirsts'])->name('firstuser');

//insert data in database
Route::post('/updateuser/{id}',[FirstController::class,'userFirst'])->name('userfirst');

Route::get('/update/{id}',[FirstController::class,'updateFirst'])->name('updatefirst');

Route::get('/delete/{id}',[FirstController::class,'deleteFirst'])->name('deletefirstuser');



Route::POST('/add',[FirstController::class,'addFirst'])->name('addfirst'); 

Route::view('newuser','/addfirst');
//Route::view('updatefirst','/updatefirst');




