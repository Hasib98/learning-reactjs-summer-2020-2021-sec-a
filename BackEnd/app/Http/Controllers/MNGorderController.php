<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usercontent;

class MNGContentindex extends Controller
{
    public function index($id)
    {
        echo $id;

        $content = usercontent::where('id',$id);

        return view('MNGindex.MNGindex')->with('contentlist', $content);

    }


    public function publish($id)
    {

        echo $id;
        $cn = usercontent::where('id',$id)->update(['crating' => 5]);

        $cn = usercontent::all();


        return view('MNGindex.MNGindex')->with('contentlist', $cn);

    }

    public function decline($id)
    {

        echo $id;
        $cn = usercontent::where('id',$id)->update(['crating' => 4]);

        $cn = usercontent::all();


        return view('MNGindex.MNGindex')->with('contentlist', $cn);

    }

    public function orderapprove(Request $req, $id){
		userorder::where('orderid',$id)->update(['orderstatus' => 1]);

		$order= userorder::all();
									 //dd($content);
		$name=$req->session()->get('username');
		$pic=$req->session()->get('picname');
		return view('MNGindex.MNGorderapprove', compact('pic','name'))->with('orderlist', $order);
		
						
		// $name=$req->session()->get('username');
		// $pic=$req->session()->get('picname');
		// return view('user_order.userorderdelete', compact('pic','name'))->with('dellist', $del);
	}
    
}
