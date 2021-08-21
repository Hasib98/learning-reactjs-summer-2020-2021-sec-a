<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userorder;
use App\userlogin;
use App\usercontent;
use App\paymentmodel;

class userordercontroller extends Controller
{
    public function index(Request $req){
		$name=$req->session()->get('username');
		$pic=$req->session()->get('picname');
		return view('user_order.userorder', compact('pic','name'));
	}
    public function add(Request  $req){
		$username=$req->session()->get('username');
		$lastid= userorder::orderBy('orderid', 'desc')
							->first();
							//dd($lastid);
		$new_order=new userorder;
		$new_order->ordername = $req->ordername;
		$new_order->orderdescription = $req->orderdescription;
		if($req->hasfile('temp')){
				$file1 = $req->file('temp');
				if($file1->move('assets/users', $lastid['orderid']+'1'.'.'.$file1->getClientOriginalExtension()))
							$new_order->template = $lastid['orderid']+'1'.'.'.$file1->getClientOriginalExtension();
					echo "success";
		}
		if($req->hasfile('pic')){
				$file = $req->file('pic');
				if($file->move('assets/users', $lastid['orderid']+'1'.'.'.$file->getClientOriginalExtension()))
							$new_order->picture = $lastid['orderid']+'1'.'.'.$file->getClientOriginalExtension();
					echo "success";
		}
		$new_order->save();
		
		return redirect('/user/order');
	}
	public function details(Request $req)
	{
		$order= userorder::all();
									 //dd($content);
		$name=$req->session()->get('username');
		$pic=$req->session()->get('picname');
		return view('user_order.userorderdetails', compact('pic','name'))->with('orderlist', $order);
	}

	public function MNGdetails(Request $req)
	{
		$order= userorder::all();
									 //dd($content);
		$name=$req->session()->get('username');
		$pic=$req->session()->get('picname');
		return view('MNGindex.MNGorderapprove', compact('pic','name'))->with('orderlist', $order);
	}
	public function edit(Request $req, $id)
	{
		$edit= userorder::where('orderid',$id)
						->get();
					
		$name=$req->session()->get('username');
		$pic=$req->session()->get('picname');

		echo $edit;		
		// echo $name;		
		// echo $pic;		
		 return view('user_order.userorderedit', compact('pic','name'))->with('editlist', $edit);
	}
	public function update(Request $req, $id){
		$lastorderid= userorder::orderBy('orderid', 'desc')
							->first();

		$username=$req->session()->get('username');
		$editorder= userorder::find($id);
		$editorder->ordername = $req->ordername;
		$editorder->orderdescription = $req->orderdescription;



		if($req->hasfile('temp')){
				$file1 = $req->file('temp');
				if($file1->move('assets/users', $lastorderid['orderid'].'.'.$file1->getClientOriginalExtension()))
							$editorder->template = $lastorderid['orderid'].'.'.$file1->getClientOriginalExtension();
					echo "success";
		}
		if($req->hasfile('pic')){
				$file = $req->file('pic');

				echo $file;
				if($file->move('assets/users', $lastorderid['orderid'].'.'.$file->getClientOriginalExtension()))
							$editorder->picture = $lastorderid['orderid'].'.'.$file->getClientOriginalExtension();
					echo "success";
		}
		$editorder->save();
		return redirect()->route('user.orderdetails');
	}
	public function Del(Request $req, $id){
		$del= userorder::where('orderid',$id)
						->get();
						
		$name=$req->session()->get('username');
		$pic=$req->session()->get('picname');
		return view('user_order.userorderdelete', compact('pic','name'))->with('dellist', $del);
	}

	public function orderapprove(Request $req, $id){
		userorder::where('orderid',$id)->update(['orderstatus' => 1]);

		$order= userorder::all();
									 //dd($content);
		$name=$req->session()->get('username');
		$pic=$req->session()->get('picname');



		$status = userorder::select('orderid','orderstatus','ordername')->where('orderid',$id)->first();

		echo '<br>';
		   //    echo $status->orderid;
		$ar1 = usercontent::select('id','image','title','cstatus','cprice')->where('title', $status->ordername)->first();
		   //    //id,image, cstatus, cprice
		$ar2 = userlogin::select('userid','name','email','phoneno')->where('type','user')->first();
	   
	   //  echo  $status->orderid."...orderid"; 
	   //  echo '<br>';
	   //  echo   $ar2->userid ."....userid"; 
	   //   echo '<br>';
	   //  echo    $ar2->name."....name"; 
	   //  echo '<br>';
	   //  echo    $status->orderstatus."....orderstatus"; 
	   //   echo '<br>';
	   // //echo    $ar1->image;
	   //   echo    $ar1->title."...ordername"; 
	   //    echo '<br>';
	   //    echo    $ar1->cprice."...cprice"; 
	   //    echo '<br>';
	   
	   //    echo    $ar1->image."...image"; 
	   //    echo '<br>';
	   
	   
			  paymentmodel::insert( [
				  'orderid' => $status->orderid,
				  'userid' =>  $id,
				  'name' =>  $ar2->name,
				  'orderstatus' =>  $status->orderstatus,
				  'title' => $ar1->title,
				  'image' =>  $ar1->image,
				  'amount' =>  $ar1->cprice,
	   
			   ] );
	   





		return view('MNGindex.MNGorderapprove', compact('pic','name'))->with('orderlist', $order);
		
						
		// $name=$req->session()->get('username');
		// $pic=$req->session()->get('picname');
		// return view('user_order.userorderdelete', compact('pic','name'))->with('dellist', $del);
	}


	public function des($id){
		$des= userorder::destroy($id);
		return redirect()->route('user.orderdetails');
	}
}
