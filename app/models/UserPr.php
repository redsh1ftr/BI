<?php

class UserPr extends Eloquent {

	protected $fillable = array(
		'f_name',
		'm_name',
		'l_name',
		'street1',
		'street2',
		'city',
		'state',
		'zip',
		'dob',
		'phone',
		'email',
		'active',
		'hire_date',
		 );
	
	protected $table = 'user_profile';
}