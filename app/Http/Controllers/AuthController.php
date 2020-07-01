<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{   
   public function welcome (){
        return view ('welcome');
   }
   public function welcome_post (Request $request ){
    $fnama = $request["fname"];
    $lnama = $request["lname"];
    return view ('welcome'); 
    }
}
