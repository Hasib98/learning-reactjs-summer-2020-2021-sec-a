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
      $content= userlogin::select('userid','username','password','phoneno')->orderBy('userid','desc')->get();
       return response()->json($content);
	}


  public function store(Request $req){

      userlogin::insert(
                          [
                            'username'=>$req->username,
                            'password'=>$req->password,
                            'phoneno'=>$req->phoneno,
                            'type'=>"",
                            'name'=>"",
                            'profilepic'=>"",
                            'email'=>""
                          ]
                        );

                        
  }

  public function show($id){

      $content = userlogin::findOrFail($id);

      return response()->json($content);
  }

  public function update(Request $req, $id)
  {
      $content = userlogin::findOrFail($id);

      $content->username = $req->username;
      $content->password = $req->password;
      $content->phoneno = $req->phoneno;
      $content->save();
      return response()->json($content);
  }


  public function destroy($id)
  {
      $content = userlogin::findOrFail($id);
      $content->delete();
      $content= userlogin::select('userid','username','password','phoneno')->orderBy('userid','desc')->get();
      return response()->json($content);
  }

}
