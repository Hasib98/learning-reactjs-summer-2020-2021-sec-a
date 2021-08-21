<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paymentmodel extends Model
{
    //
    protected $table = 'payment';
	protected $primaryKey = 'pid';
	public $timestamps = false;
	
	//const CREATED_AT = 'create_time';
	//const UPDATED_AT = 'update_time';
}
