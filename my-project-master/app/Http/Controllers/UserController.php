<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends ViewCompilingController
{
  public function getRegistrationPage(){
     return $this->buildpages ('registration');
      
//dd (config ('pages.home'));
//return view('home');
  }
  public function postRegistrationForm(Request $request){
      dd($request-all());
      
  }
}
