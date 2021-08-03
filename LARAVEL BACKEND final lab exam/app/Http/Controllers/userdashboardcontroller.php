<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usercontent;
use App\userinvoice;

class userdashboardcontroller extends Controller
{
    public function index(Request $req){
		$name=$req->session()->get('username');
		$pic=$req->session()->get('picname');
		$type=$req->session()->get('type');
		$content= usercontent::all();

		// echo $type;
		// echo $pic;
		// echo $name;

		
		if($type == "manager")
		{
			$content = usercontent::all();
			echo $content;
			
			
			return view('MNGindex.MNGindex',compact('pic','name'))->with('contentlist', $content); 
		}
		else{
			//return view('user_dashboard.userdashboard')->with('list', $content);
		return view('user_dashboard.userdashboard', compact('pic','name'))->with('list', $content);
		}
		
	}
	public function details(Request $req, $id){
		$content= usercontent::where('id', $id)
		                             ->get();
									 //dd($content);
		$name=$req->session()->get('username');
		$pic=$req->session()->get('picname');
		return view('user_dashboard.userdashboarddetails', compact('pic','name'))->with('list', $content);
	}
	public function invoice(Request $req, $id){
		$name=$req->session()->get('username');
		$pic=$req->session()->get('picname');
		$invoice= usercontent::where('id', $id)
		                             ->first();
									
		$new_invoice=new userinvoice;
		$new_invoice->invoiceid = $invoice['id'];
		$new_invoice->invoicetitle = $invoice['title'];
		$new_invoice->invoiceprice = $invoice['cprice'];
		$new_invoice->invoicestatus = $invoice['cstatus'];
		$new_invoice->save();	
			
		$invoice1= usercontent::where('id', $id)
		                       ->get();						
		return view('user_dashboard.userdashboardinvoice', compact('pic','name'))->with('invoicelist', $invoice1);
	}
	public function print($id){
		$print= usercontent::where('id', $id)
		                       ->get();
		return view('user_dashboard.userdashboardprint')->with('printlist', $print);
	}
}
