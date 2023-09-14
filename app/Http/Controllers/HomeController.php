<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{

    //User Controller
    public function index()
    {
        return view('home.userpage');
    }

    //Admin Controller
  public function redirect()
  {
    $usertype=Auth::user()->usertype;

    if($usertype=='1') //if user is admin (1) it will redirect to admin dashboard
    {
        return view('admin.home');
    }
    else //if user is normal user (0) it will redirect to user dashboard
    {
        return view('home.userpage');
    }
  }
}
