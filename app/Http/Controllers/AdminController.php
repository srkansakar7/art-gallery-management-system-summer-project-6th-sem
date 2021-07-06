<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function adminlogin(Request $req){
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
        $user=Admin::where(['LoginName'=>$req->LoginName])->first()->FullName;
        $usercheck= Admin::where(['LoginName'=>$req->LoginName])->first();
        if(!$usercheck || !Hash::check($req->password,$usercheck->password))
        {
            return "Username or password is not matched";
        }else{
            $req->session()->put('admin',$usercheck);
            return redirect('admincontrol');
        }

    
    
    }
}
