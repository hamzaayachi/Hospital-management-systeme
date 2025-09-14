<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;


class UserController extends Controller
{
    
public function Dashboard(){

        if(Auth::check()&&Auth::user()->user_type =='user')
    {
      
        return view('dashboard');

    }
    else if(Auth::check()&&Auth::user()->user_type =='admin')
    {
        return view(('admin.dashboard'));
    }
    else {
        return redirect('/');
    } 

}
}
