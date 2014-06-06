@extends('layouts.master')

<div class="toolbar">
	<table width="50%">

{{-- USER PROFILE SECTION LINKS GO HERE --}}
		
		<td>{{link_to_route('make_cert', 'Add Certifications')}}
		<td>{{link_to_route('cert_listShow', 'Certification List')}}
		<td>{{link_to_route('make_user', 'Add Users')}}
		<td>{{link_to_route('user_list', 'User List')}}
	
	</table>

<hr>	


<div class="top_left_1">
	@yield('top_left_1')
</div>

<div class="top_right_1">
	@yield('top_right_1')
</div>











</div>
</html>