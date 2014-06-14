@extends('layouts.master')

<div class="toolbar">


{{-- USER PROFILE SECTION LINKS GO HERE --}}
		<a class="button"{{ link_to_route('user_list', 'Employee List')}}
		<a class="button"{{ link_to_route('make_user_certShow', "Add Certifications to $user->f_name $user->l_name", $user->id, array('id' => $user->id));}}



<div class="top_left_1">
	@yield('top_left_1')
</div>

<div class="top_right_1">
	@yield('top_right_1')

	@yield('expired_certs')	

</div>












</div>