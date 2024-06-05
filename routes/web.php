<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('app');
//});

//  Sai cú pháp, cố gắng đặt điều kiện trên một giá trị tĩnh thay vì một tham số URL. 
Route::view("/{any}" , "app")->where("any", ".*");

//  Đúng cú pháp, đặt điều kiện trên tham số URL {any}, đảm bảo rằng mọi đường dẫn sẽ được chuyển đến view "app".
//  Thay dấu "" bằng '' .
// Route::view('/{any}' , 'app')->where('any', '.*');

//  ChatGPT

//Route::view("/{any}", "app")->where("any", ".*"); // sử dụng dấu nháy kép 

//Route::view("/{any}", "app")->where("any", ".*");// Lỗi không phải do dấu hay cách mà là do dùng app thay vì any=))))

//Route::view('/{any}', 'app')->where('any', '.*'); // sử dụng dấu nháy đơn
