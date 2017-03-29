<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	//recognize table from database
   	protected $table = 'clients';

   	//fillable name must exactly same with the input name from the client-side form
	protected $fillable = ['name', 'description'];

	//validate every field from client-side
    public static $client_validation_rules = [
    	'name' => 'required',
    	'description' => 'required',
    ];

/*    public function store()
    {
        return $this->hasMany('Store');
    }*/   
}
