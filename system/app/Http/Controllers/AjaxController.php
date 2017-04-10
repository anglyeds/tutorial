<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function index()
    {
    	return view('ajax.message');
    }

    public function show()
    {
    	$msg = "This is a simple Message";

    	return response()->json(array('msg' => $msg), 200);
    }    
    

}
