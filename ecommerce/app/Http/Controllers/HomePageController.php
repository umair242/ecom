<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends ViewCompilingController
{
    public function getHomePage(){
      //  echo "My Home Page Function";
      //  dd(config('pages.home'));
       // return view('homepage');
        return $this->buildPages('home');
        
    }
}
