<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userorder extends Model
{
    protected $table = 'users';
	protected $primaryKey = 'userid';
	public $timestamps = false;
	
	//const CREATED_AT = 'create_time';
	//const UPDATED_AT = 'update_time';
}
