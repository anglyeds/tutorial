<?php

namespace App\Http\Controllers\Auth;


use Auth;
use Illuminate\Http\Request;

use App\User;
use App\Week;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        $users = User::all();
        return view('auth.login')->with('user', $users); 
    }

    public function handleLogin(Request $request)
    {
        $this->validate($request, User::$login_validation_rules);
        $data = $request->only('name','password');
        //$hashPW = \Hash::make('1234qwer');
        try{
            //dd($hashPW);
            if(Auth::attempt($data)){
                
                return redirect()->intended('/weeks/select');
            }
        } catch (Exception $e) {
             echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
        return back()->withInput()->withErrors(['password' => 'Wrong Password!']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
