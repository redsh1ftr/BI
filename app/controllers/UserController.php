<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function showProfile($id){
		return View::make('user.user_profile')
		->with('pagetitle', 'Home')
		->with('user', UserPr::where('id', '=', $id)->first())
		->with('certs', UserCertMain::where('uid', '=', $id)->get());
	}
	

	public function showHistory(){
		$id = Session::get('uid');
		return View::make('user.cert_history')
		->with('pagetitle', 'Home')
		->with('user', UserPr::where('uid', '=', $id)->first())
		->with('certs', CertMain::get());
	}

	public function admin_profile()
	{
		return View::make('user.admin_tools', array())
		->with('pagetitle', 'Administration');
	}


	public function make_userShow(){
		return View::make('user.make_user', array())
		->with('pagetitle', 'Make Users');
	}

	public function make_userDo(){
		UserPr::create(array(
			'f_name' => Input::get('f_name'),
			'm_name' => Input::get('m_name'),
			'l_name' => Input::get('l_name'),
			'street1' => Input::get('street1'),
			'street2' => Input::get('street2'),
			'city' => Input::get('city'),
			'state' => Input::get('state'),
			'zip' => Input::get('zip'),
			'phone' => Input::get('phone'),
			'email' => Input::get('email'),
			'dob' => Carbon::parse(Input::get('dob')),
			'hire_date' => Carbon::parse(Input::get('hire_date')),
			));
		return Redirect::route('make_user');
	}

	public function user_listShow(){
		return View::make('user.list', array())
		->with('pagetitle', 'User List')
		->with('users', UserPr::get());
	}
	


	public function doLogin(){
		//Validator Start
		$rules = array(
			'username' => 'required',
			'password' => 'required|min:3'
		);


		//run on input
		$validator = Validator::make(Input::all(), $rules);


		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
				$username = Input::get('username');
				$password = Input::get('password');

			// attempt to do the login
			if (User::where('username', '=', $username)->where('password', '=', $password)->first())
			{
				Session::put('uid', User::where('username', '=', $username)->where('password', '=', $password)->pluck('id'));
			return View::make('user.create_users', array())
			->with('pagetitle', "$username Profile")
			->with('user', UserPr::where('uid', '=', Session::get('uid'))->first())
			->with('certs', CertMain::get());

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
		

			} else {	 	

				// validation not successful, send back to form	

			return Redirect::route('login');

		}
	}
}
}