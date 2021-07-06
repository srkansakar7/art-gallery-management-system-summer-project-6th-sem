<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\User;
use App\Models\Admin;

class ProductController extends Controller
{
    function index(){
        //return "This is the product page";
        //return view('Gallery');
       $data=Product::all();
       return view('product',['products'=>$data]);
    }

    function detail($id){
        if($id=="OurGallery"){
            return redirect('OurGallery');
        }elseif($id=="LogOut"){
            return redirect('LogOut');
        }elseif($id=="CustomerLogin"){
            return redirect('CustomerLogin');
        }elseif($id=="register"){
            return redirect('register');
        }elseif($id=="home"){
            return redirect('home');
        }elseif($id=="myOrders"){
            return redirect('myOrders');
        }elseif($id=="categories"){
            return redirect('categories');
        }elseif($id=="FAQ"){
            return redirect('FAQ');
        }elseif($id=="Services"){
            return redirect('Services');
        }elseif($id=="AboutUs"){
            return redirect('AboutUs');
        }elseif($id=="Artists"){
            return redirect('Artists');
        }elseif($id=="cartList"){
            return redirect('cartList');
        }elseif($id>0){
            $data=Product::find($id);
            return view('detail',['product'=>$data]);
        }

    }

    function search(Request $req){
        $data=Product::where('name','like','%'.$req->input('query').'%')->get();
        $S= $req->input("query");
        return view('search',['products'=>$data],['s'=>$S]);
        //return $S;
        //return (['s'=>$g]);
    }

    function addCart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/sale');
        }else{
            return redirect('CustomerLogin');
        }            
    }

    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList(){
        if(Session::has('user')){
        $userId=Session::get('user')['id'];
        $products= DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as carts_id')
        ->get();
        return view('cartList',['products'=>$products]);
        }else{
            return redirect('CustomerLogin');
        }
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartList');
    }

    function orderNow(){
        $userId=Session::get('user')['id'];
        $total= DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as carts_id')
        ->sum('products.price');
 
         return view('orderNow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
        $add=Session::get('user')['address'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$add;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/sale');
        }

        function myOrders()
        {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('myOrders',['orders'=>$orders]);
        }

        function showOrders(){
            if(Session::has('admin')){
                $data=Order::all();
                return view('orderlist',['orders'=>$data]);
            }else{
                return view("ata");
            }            
        }

        function showUsers(){
            if(Session::has('admin')){
                $users=User::all();
                return view('userlist',['users'=>$users]);
            }else{
                return view("ata");
            }            
        }

        function show(){
            if(Session::has('admin')){
                $data=Product::all();
                return view('list',['products'=>$data]);
            }else{
                return view("ata");
            }            
        }

        function addProduct(Request $req){
            $product=new Product;
            $product->name=$req->name;
            $product->category=$req->category;
            $product->price=$req->price;
            $product->description=$req->description;
            $product->gallery=$req->gallery;
            $product->seller=$req->seller;
            $product->save();
            return view('admincontrol');
        }

        function deleteProduct($id){
            $data=Product::find($id);
            $data->delete();
            return redirect('admincontrol');
        }
} 