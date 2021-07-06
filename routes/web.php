<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;
use App\Models\Admin;


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

Route::get('home', function () {
    return view('welcome');    
});

Route::get('register', function(){
    return view('AdminLogin');
});

Route::get('CustomerLogin', function(){
    return view('CustomerLogin');
});

Route::get('AdminLogin', function(){
    return view('adminLoginForm');
});

Route::get('categories', function(){
    return view('categories');
});

Route::get('Artists', function(){
    return view('ata');
});

Route::get('FAQ', function(){
    return view('faq');
});

Route::get('Services', function(){
    return view('ourservices');
});

Route::get('AboutUs', function(){
    return view('aboutus');
});

Route::get('OurGallery', function(){
    return view('Gallery');
});


Route::get('Test', function(){
    return view('test');
});

/*Route::get('LogOut', function(){
    return view('CustomerLogin');
});*/

Route::post('CustomerLogin',[UserController::class,'login']); //UserController Route
Route::post('AdminLogin',[UserController::class,'register']); 


//Route::get('Gallery',[ProductController::class,'index']);

Route::get('LogOut',function(){
    Session::forget('user');
    Session::forget('admin');
    
    return view('Loggingout');
});

Route::get("/sale",[ProductController::class,'index']);//for product slider->"/" leads to product page!

Route::get("detail/{id}",[ProductController::class,'detail']);//for detai page

Route::get("search",[ProductController::class,'search']);

Route::post("addToCart",[ProductController::class,'addCart']);

Route::get("cartList",[ProductController::class,'cartList']);

Route::get("removeCart/{id}",[ProductController::class,'removeCart']);

Route::get("orderNow",[ProductController::class,'orderNow']);

Route::post("orderplace",[ProductController::class,'orderPlace']);

Route::get("myOrders",[ProductController::class,'myOrders']);


Route::post('testingvalidation',[TestController::class,'getV']); 

Route::view("tesst","testingvalidation");

Route::get("admincontrol",function(){
    if(Session::has('admin')){
        return view("admincontrol");
    }else{
        return view("ata");
    }});
    




Route::post('adminLoginForm',[AdminController::class,'adminlogin']); //AdminController Route

Route::get('list',[ProductController::class,'show']);
Route::get('orderlist',[ProductController::class,'showOrders']);
Route::get('userlist',[ProductController::class,'showUsers']);

Route::get("add",function(){
    if(Session::has('admin')){
        return view("addproduct");
    }else{
        return view("ata");
    }
});

Route::post("add",[ProductController::class,"addProduct"]);

Route::get("delete/{id}",[ProductController::class,"deleteProduct"]);