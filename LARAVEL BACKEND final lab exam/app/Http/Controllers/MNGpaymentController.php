<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userlogin;
use App\paymentmodel;
use App\usercontent;
use App\userorder;
use App\userinvoice;
use PhpParser\Node\Expr\Print_;

class MNGpaymentController extends Controller
{
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


    //    paymentmodel::insert( [
    //        'orderid' => $status->orderid,
    //        'userid' =>  $ar2->userid,
    //        'name' =>  $ar2->name,
    //        'orderstatus' =>  $status->orderstatus,
    //        'title' => $ar1->title,
    //        'image' =>  $ar1->image,
    //        'amount' =>  $ar1->cprice,

    //     ] );



        $content = paymentmodel::all()->where('orderstatus',1 );

        //echo $content;
      

  
        return view('MNGindex.MNGpayment')->with('contentlist', $content);

       //'userid','name','email','phoneno'
    



       //echo $status->orderstatus;
       
    //    echo gettype($ar1); 
    //    echo '<br>';



    //     $collection = collect($ar1);

    //     echo gettype($collection); 
    //     echo '<br>';

    //     //$content = $collection->merge($ar2)->merge($ar3)->merge($ar4)->merge($ar5);


    //     $content = $collection->merge($ar2,$ar3,$ar4,$ar5);

    //     echo gettype($content); 
    //     echo '<br>';
        

    //     $content =   "[".$content."]";

    //     echo gettype( $content); 
    //     echo '<br>';

       
        // echo '<br>';


        // echo  gettype($ar1);
        // echo '<br>';
        // echo  gettype($content);
        // echo '<br>';
        // echo  $ar2;
        // echo '<br>';
        // echo  $ar3;
        // echo '<br>';
        // echo  $ar4;
        // echo '<br>';
        // echo  $ar5;
        // echo '<br>';

        //return view('MNGindex.MNGpayment')->with('contentlist', $ar3);




    }
}
