<?php

class CertController extends BaseController {

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

	public function cert_listShow()
	{
		return View::make('certifications.certification_list', array())
			->with('pagetitle', 'Certification List')
			->with('certs', CertMain::orderBy('name')->get());
	}


	public function cert_profileShow($id){
	$certificate = CertMain::where('id', '=', $id)->first();
		return View::make('certifications.certification_profile', array())
		->with('pagetitle', $certificate->name)
		->with('certs', $certificate);
	}


	public function make_certShow(){
		return View::make('certifications.make_cert', array())
		->with('pagetitle', 'Add Certifications');
	}


	public function make_certDo(){
		CertMain::create(array(
			'name' => Input::get('name'),
			'term' => Input::get('term'),
			'term_' => Input::get('term_'),
			'desc' => Input::get('desc'),
			));
		return Redirect::route('admin_profile');
	}

	public function make_user_certShow($id){
		return View::make('certifications.make_user_cert', array())
		->with('pagetitle', 'Add a Certificate')
		->with('id', $id)
		->with('user', UserPr::where('id', '=', $id)->first())
		->with('cert_list', CertMain::get());
	}





	public function make_user_certDo(){
		$timespan = Input::get('reminder2');
		$time = Input::get('reminder');
		$cert_term = CertMain::where('id', '=', Input::get('cert_id'))->pluck('term');
		$cert_term_ = CertMain::where('id', '=', Input::get('cert_id'))->pluck('term_');
		$exp_time = Carbon::parse(Input::get('cert_received'));
		$exp_time->$cert_term_($cert_term);
		$rtime = new Carbon($exp_time);
		$rtime = $rtime->$timespan($time);

//HANDLE IMAGES		
	if(Input::file('certificate')){
				$newfile = str_random(124);
				$file = Input::file('certificate'); // your file upload input field in the form should be named 'file'
				$destinationPath = 'uploads/';
				$filename = $file->getClientOriginalExtension($file);
				//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
				$uploadSuccess = Input::file('certificate')->move($destinationPath, "$newfile.$filename");

		UserCertMain::create(array(
			'uid' => Input::get('uid'),
			'cert_id' => Input::get('cert_id'),
			'cert_recd' => Carbon::parse(Input::get('cert_recd')),
			'cert_exp' => $exp_time,
			'reminder' => $rtime,
			'certificate' => "$newfile.$filename",
			));
		return Redirect::route('admin_profile');

	}else{

		UserCertMain::create(array(
			'uid' => Input::get('uid'),
			'cert_id' => Input::get('cert_id'),
			'cert_recd' => Carbon::parse(Input::get('cert_recd')),
			'cert_exp' => $exp_time,
			'reminder' => $rtime,
			));
		return Redirect::route('admin_profile');


	}}




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
				$uid = User::where('username', '=', $username)->where('password', '=', $password)->pluck('id');
				Session::put('uid', $uid);
			return View::make('user.user_profile', array())
			->with('pagetitle', "$username Profile")
			->with('user', UserPr::where('uid', '=', Session::get('uid'))->first())
			->with('certs', CertMain::where('uid', '=', $uid)->get());

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