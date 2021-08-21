<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userlogin;
use App\usercontent;

class MNGHomeController extends Controller
{
    //
    public function index(Request $req){
        //session or cookie
        //return view('home.index')->with('id', $id);
        
        //return view('home.index');
        // ->withId('123')
        // ->withName('hasib');
        
        //return view('home.index',['id'=>123,'name'=>'hasib']);
        
        $id = '78';
        $name = $req->session()->get('uname');
       return view('home.index',compact('id','name'));
        
        
    }
    public function indexx(){
       
       return view('MNGindex.MNGindex'); 
       //echo "olo" ;
        
    }
    public function contentmanageview(){
        return view('MNGindex.MNGcontentmanage');
        
    }
    public function orderapproveview(){
        return view('MNGindex.MNGorderapprove');
    }
    public function creatorprofileview(){
        return view('MNGindex.MNGcreatorprofile');
    }
    public function userprofileview(){
        return view('MNGindex.MNGuserprofile');
    }
    public function paymentmanageview(){
        return view('MNGindex.MNGpaymentmanage');
    }
    public function allcontentview( Request $req){
        $pic = $req->session()->get('pic');
       

        // $content = usercontent::where('crating',5)->first();

        $content = usercontent::all()->where('crating',5 );

        //echo $content;
      

        $pic = $req->session()->get('pic');
        return view('MNGindex.MNGallcontent',compact('pic'))->with('contentlist', $content);
      
    }

    public function edit(){
        echo "edit profile";
        //return view('MNGindex.MNGeditprofile');
    }

    public function editprofileview(Request $req)
	{


        $username = $req->session()->get('uname');
		$all = userlogin::where('username', $username)->first();
        return view('MNGindex.MNGeditprofile')->with('edit', $all);
        //return view('MNGindex.MNGeditprofile');
	}


    public function update(Request $req){

        


        userlogin::where('userid',$req->userid)
                                    ->update([ 'userid'=>$req->userid,
                                    'username'=>$req->username,
                                    'name'=>$req->name,
                                    'password'=>$req->password,
                                    'email'=>$req->email,
                                    'phoneno'=>$req->phoneno
                                 ]);


            $cred= userlogin::where('userid', $req->userid)->first();
            if($req->hasfile('profilepic')){

                // $file = $req->file('profilepic');
                // $file->move('assets/users', $cred['profilepic'].'.'.$file->getClientOriginalExtension());
                $file = $req->file('profilepic');
				$file->move('assets/users', $cred['username'].'.'.$file->getClientOriginalExtension());


               
               


            }
            return redirect()->route('user.dashboard');

            
	}

    public function paymentview(){
        // echo "xv";

        //return redirect('/payment');
       // return view('/payment');


    $status = userorder::select('orderid','orderstatus','ordername')->where('orderstatus',1)->first();

    echo '<br>';
        //    echo $status->orderid;
    $ar1 = usercontent::select('id','image','title','cstatus','cprice')->where('cstatus',1)->first();
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
            'userid' =>  $ar2->userid,
            'name' =>  $ar2->name,
            'orderstatus' =>  $status->orderstatus,
            'title' => $ar1->title,
            'image' =>  $ar1->image,
            'amount' =>  $ar1->cprice,

            ] );

        }


        public function discount(Request $id){

     



            usercontent::where('id',$id)->update(['cprice' => 700]);


            $order= usercontent::all();


        //     echo $id->pid;

        //     $value = usercontent::all()->where('id',$id->pid);
          

        //    //echo gettype($value);
        //    echo $value->cprice;
           
            


           


            // usercontent::update('cprice')->where('id',$id);
             return view('MNGindex.MNGpayment')->with('contentlist', $order );

        }

        // public function orderapprove(Request $req, $id){
        //     userorder::where('orderid',$id)->update(['orderstatus' => 1]);
    
        //     $order= userorder::all();
        //                                  //dd($content);
        //     $name=$req->session()->get('username');
        //     $pic=$req->session()->get('picname');
        //     return view('MNGindex.MNGorderapprove', compact('pic','name'))->with('orderlist', $order);
            
                            
        //     // $name=$req->session()->get('username');
        //     // $pic=$req->session()->get('picname');
        //     // return view('user_order.userorderdelete', compact('pic','name'))->with('dellist', $del);
        // }

}
