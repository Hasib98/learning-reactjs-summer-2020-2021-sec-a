<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usercontent;
use App\userinvoice;
use App\userorder;

use App\userlogin;
use Illuminate\Support\Collection;
use SebastianBergmann\Environment\Console;

class ApiUser extends Controller
{
    public function index(Request $req){
      //$content= userlogin::all();
      $content= usercontent::select('title','image','cdescription','cprice')->get();
       return response()->json($content);
	}

    

}
