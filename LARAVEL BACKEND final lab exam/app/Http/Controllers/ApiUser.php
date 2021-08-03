<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usercontent;
use App\userinvoice;

use App\userlogin;
use Illuminate\Support\Collection;


class ApiUser extends Controller
{
    public function index(Request $req){
		//$content= userlogin::all();
		$content= userlogin::select('userid','username','password','phoneno')->get();


        //$content = json_encode($content);
        /* echo $content;

        echo '<br>';
        echo '<br>';
        echo '<br>';

        $content = json_encode($content);

        echo '<br>';
        echo '<br>';
        echo '<br>';
        */
        return response()->json($content);
     
         //return view('MNGindex/arra');
	}
}
