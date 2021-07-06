<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Crypt;

class UserController extends Controller
{
    function getData(Request $req){
        $validatedData = $req->validateWithBag('post', [
                'user'=>['required'],         
        ]);
        
    }

    function register(Request $req){
        
            $user=new User;
            $user->name=$req->input('admin');
            $user->email=$req->input('email');
            $user->password=Hash::make($req->input('password'));
            $user->address=$req->input('address');
            $user->contact=$req->input('contact');
            $user->save();
            return redirect('CustomerLogin');
           
    }
    function login(Request $req){
        //return User::where(['email'=>$req->email])->first();
       /* $user=User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return"Username or Password not matched";
        }else{
            $req->session()->put('user',$user);
            return redirect('Gallery');
        }*/
        /*$user=User ::where("email",$req->input('email'))->get();
        if(Crypt::decrypt($user[0]->password)==$req->input('password')){
            $req->session()->put('user',$user[0]->name);
            return redirect('Gallery');
        }*/
        $userId=User::where(['email'=>$req->email])->first()->name;
        $user= User::where(['email'=>$req->email])->first();
        if((Hash::check($req->password,$user->password)) && ($userId=="ADMIN"))
        {
            $req->session()->put('user',$user);
            return redirect("admincontrol");
        }
        elseif(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }else{
            $req->session()->put('user',$user);
            return redirect('home');
        }
    
    }
}
