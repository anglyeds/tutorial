<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
	protected $table = 'weeks';

	protected $fillable = ['week', 'date_start', 'date_end'];

    public static $week_validation_rules = [
    	'week' => 'required',
    	'date_end' => 'required',
    	'date_start' => 'required',
    ];
}
