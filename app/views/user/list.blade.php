@extends('layouts.admin')
@section('top_left_1')
<table class="BlueTable">
	<td>User<tr>
@foreach($users as $user)


<td>{{link_to_route('user_profile', "$user->f_name $user->m_name $user->l_name", 
		json_encode(array(
			'id', 'id' => $user->id,
			'sort' => 'created_at',
			'updown' => 'desc',
		)));}}<tr>
@endforeach
</table>


@stop