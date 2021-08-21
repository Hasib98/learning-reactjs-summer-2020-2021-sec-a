<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usercontent extends Model
{
    protected $table = 'contentcreator';
	protected $primaryKey = 'id';
	public $timestamps = false;
	
	//const CREATED_AT = 'create_time';
	//const UPDATED_AT = 'update_time';
}
