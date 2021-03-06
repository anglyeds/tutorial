<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Store;

class Chain extends Model
{
	//recognize table from database
   	protected $table = 'chains';

   	//fillable name must exactly same with the input name from the client-side form
	protected $fillable = ['name', 'display_name', 'description'];

	//validate every field from client-side
    public static $chain_validation_rules = [
    	'name' => 'required',
    	'display_name' => 'required',
    	'description' => 'required',
    ];

/*    public function store()
    {
        return $this->hasMany('Store');
    }*/
}
