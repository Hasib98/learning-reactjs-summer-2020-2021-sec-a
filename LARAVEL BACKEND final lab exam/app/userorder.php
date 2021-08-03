<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userorder extends Model
{
    protected $table = 'orders';
	protected $primaryKey = 'orderid';
	public $timestamps = false;
	
	//const CREATED_AT = 'create_time';
	//const UPDATED_AT = 'update_time';
}
