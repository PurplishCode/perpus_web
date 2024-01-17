<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function viewLogin()
    {
    
        return view("pages.login_page");
    }

    public function viewRegister()
    {
        return view('pages.register_page');
    }

    public function viewHome()
    {
   return view('user.home');
    }

    public function viewSecurity()
    {
        return view('security.security_home');
    }
    public function viewAdmin()
    {
        return view('admin.dashboard');
    }

    public function viewGallery()
    {
return view('user.gallery_list');
    }

    public function sideview()
    {
        return view('layout.sidebar');
    }
}
