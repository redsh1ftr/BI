@extends('layouts.master')

<div class="toolbar">
	

{{-- USER PROFILE SECTION LINKS GO HERE --}}
		
	<a class="button" href={{ URL::route('make_cert')}}>Add Certifications</a>
	<a class="button" href={{ URL::route('cert_listShow') }}>Certification List</a>
	<a class="button" href={{ URL::route('user_list')}}> Employee List</a>
	<a class="button" href={{ URL::route('make_user')}}>Add Employee</a>
	



<div class="top_left_1">
	@yield('top_left_1')
</div>

<div class="top_right_1">
	@yield('top_right_1')
</div>











</div>
</html>