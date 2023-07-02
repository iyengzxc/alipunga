<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage(){
        return view('home');
    }  
    
    public function packagePage() {
        return view('package');
    }

    public function collectionPage(){
        return view('collection');
    }


} 