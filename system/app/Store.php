<?php

namespace App;

use Chain;
use Illuminate\Database\Eloquent\Model;


class Store extends Model
{
	//recognize table from database
    protected $table = 'stores';

    //fillable name must exactly same with the input name from the client-side form
	protected $fillable = ['chain_id','code', 'name','address', 'display_name', 'description'];

	//validate every field from client-side
    public static $store_validation_rules = [
    	'code' => 'required',
    	'name' => 'required|unique:stores',
    	'address' => 'required',
    	'display_name' => 'required',
    	'description' => 'required',
    ];

    public function chain()
    {
    	return $this->belongsTo('Chain');
    }
}
