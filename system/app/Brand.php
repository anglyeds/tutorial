<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	//recognize table from database
   	protected $table = 'brands';

   	//fillable name must exactly same with the input name from the client-side form
	protected $fillable = ['name', 'description'];

	//validate every field from client-side
    public static $brands_validation_rules = [
    	'name' => 'required|unique:brands',
    	'description' => 'required',
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

}
