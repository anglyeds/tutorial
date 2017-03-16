<?php 

namespace App\Http\Controllers\Registration;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use \Auth, \Redirect, \Validator, \Input, \Session, \Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller {

	public function __construct()
	{
		
	}

		/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = User::all();
		return view('auth.index')->with('user', $user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// folder.file
		return view('auth.register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserStoreRequest $request)
	{
        // store
		/*		dd($request);
		        $users = new User;
		        $users->name = Input::get('name');
		        $users->email = Input::get('email');
		        $users->password = Hash::make(Input::get('password'));
		        $users->save();
		        
		        dd($users);
		        Session::flash('message', 'You have successfully added a new user');*/
        return view('auth.login');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$users = User::find($id);
        return view('auth.edit')
            ->with('user', $users);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if($id == 1)
		{
			Session::flash('message', 'You cannot edit admin');
			Session::flash('alert-class', 'alert-danger');
	            return Redirect::to('employees');
		}
		else
		{	
			$rules = array(
			'name' => 'required',
			'email' => 'required|email|unique:users,email,' . $id .'',
			'password' => 'min:6|max:30|confirmed',
			);
			$validator = Validator::make(Input::all(), $rules);
			if ($validator->fails()) 
			{
				 return Redirect::to('employees/' . $id . '/edit')
				->withErrors($validator);
			} else {
	            $users = User::find($id);
	            $users->name = Input::get('name');
	            $users->email = Input::get('email');
	            if(!empty(Input::get('password'))) 
	            {
	            	$users->password = Hash::make(Input::get('password'));
	            }
	            $users->save();
	            // redirect
	            Session::flash('message', 'You have successfully updated employee');
	            return Redirect::to('employees');
	        }
	    }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if($id == 1)
		{
			Session::flash('message', 'You cannot delete admin on TutaPOS demo');
			Session::flash('alert-class', 'alert-danger');
	            return Redirect::to('employees');
		}
		else
		{		
			try 
			{
				$users = User::find($id);
		        $users->delete();
		        // redirect
		        Session::flash('message', 'You have successfully deleted employee');
		        return Redirect::to('employees');
	    	}
	    	catch(\Illuminate\Database\QueryException $e)
    		{
        		Session::flash('message', 'Integrity constraint violation: You Cannot delete a parent row');
        		Session::flash('alert-class', 'alert-danger');
		        return Redirect::to('employees');	
	    	}
	    }
	}

}
