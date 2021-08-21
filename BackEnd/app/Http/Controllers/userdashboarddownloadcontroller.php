<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userdashboarddownloadcontroller extends Controller
{
    public function download( $id ) {  
// Check if file exists in storage directory 
$file_path = storage_path('assets/users') . $id;  
  
if ( file_exists( $file_path ) ) {  
	// Send Download  
	$headers = [
            'Content-Type' => 'application/pdf'
        ];
	return \Response::download( $file_path, 'Test File', $headers, 'inline' );  
 
	} else {  
	// Error exit( 'Requested file does not exist on our server!' );  
	} 
 }
}
