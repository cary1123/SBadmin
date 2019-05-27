<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SbAdminController extends Controller
{
    public function index($page="index.html")
    {
      switch($page)
       {
        case "index.html":
           return view('SBAdmin.index');
        break;
        case "login.html":
           return view('SBAdmin.login');
        break;
        case "register.html":
           return view('SBAdmin.register');
        break;  
        case "forgot-password.html":
           return view('SBAdmin.forgot-password');
        break;       
        case "404.html":
           return view('SBAdmin.404');
        break;    
        case "blank.html":
           return view('SBAdmin.blank');
        break;  
        case "charts.html":
           return view('SBAdmin.charts');
        break;       
        case "tables.html":
           return view('SBAdmin.tables');
        break;         
       }
    }     
}