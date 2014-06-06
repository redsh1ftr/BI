@extends('layouts.master')

<div class="toolbar">
	<table width="50%">

{{-- USER PROFILE SECTION LINKS GO HERE --}}
		
		<td>{{link_to_route('user_list', 'User List')}}
		<td>{{link_to_route('make_user_certShow', "Add Certifications to $user->f_name $user->l_name", $user->id, array('id' => $user->id));}}


	
	</table>

<hr>	


<div class="top_left_1">
	@yield('top_left_1')
</div>

<div class="top_right_1">
	@yield('top_right_1')
</div>











</div>