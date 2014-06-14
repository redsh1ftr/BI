@extends('layouts.user_profile')

@section('top_left_1')

<table class="BlueTable">
<td><td>{{$user->f_name}} {{$user->m_name}} {{$user->l_name}}<tr>



<td>Address:<td>

@if($user->street2)
	{{$user->street1}}, {{$user->street2}}
@else
	{{$user->street1}}
@endif
	 {{$user->city}} {{$user->state}}, {{$user->zip}}<tr>





	<td>Hire Date:<td>{{Carbon::parse($user->hire_date)->format('D, M d Y')}}<tr>
	<td>Birthday:<td>{{Carbon::parse($user->dob)->format('D, M d Y')}}<tr>
	<td>Phone:<td>{{$user->phone}}<tr>
@if($user->email)
	<td><td>{{HTML::mailto($user->email)}}<tr>

@endif
</table>

@stop


@section('top_right_1')


<h2> Active Certifications </h2>

<table class="BlueTable" align="center" width="100%" border="1">

		<th>Certification</th>


		<th>{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'asc')))}} 
			Received
			{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'desc')))}}</th>


		<th>{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'desc')))}}
			Expires 
		{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'asc')))}}</th>


		<th>{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'asc')))}} 
			Reminder
			 {{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'desc')))}}</th>
		<th>Image</th></tr>
	
@foreach($certs as $cert)

		<td>{{ link_to_route('user_certShow', CertMain::where('id', '=', $cert->cert_id)->pluck('name'), $cert->id) }} 
		<td>{{ Carbon::parse($cert->cert_recd)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->cert_exp)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->reminder)->format('D, M d Y')}}
		<td>@if($cert->certificate) <a target="_blank"{{link_to("http://www.precisemaintenance.com/ExcelBI/public/uploads/$cert->certificate", 'View Image')}}@endif<tr>

@endforeach
</table>

@stop

@section('expired_certs')

<?php $exp_certs = UserCertMain::where('uid', '=', $id->id)->where('cert_exp', '<', Carbon::today())->get();?>

@if(!$exp_certs->isEmpty())

<h2> Expired Certifications </h2>


<table class="BlueTable" align="center" width="100%" border="1">
		<th>Certification</th>


		<th>{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'asc')))}} 
			Received
			{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_recd', 'updown' => 'desc')))}}</th>


		<th>{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'desc')))}}
			Expires 
		{{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'cert_exp', 'updown' => 'asc')))}}</th>


		<th>{{link_to_route('user_profile', '▲', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'asc')))}} 
			Reminder
			 {{link_to_route('user_profile', '▼', json_encode(array('id', 'id' => $user->id, 'sort' => 'reminder', 'updown' => 'desc')))}}</th>
		<th>Image</th></tr>
	
@foreach($exp_certs as $certs)
		<td>{{ link_to_route('user_certShow', CertMain::where('id', '=', $cert->cert_id)->pluck('name'), $cert->id) }} 
		<td>{{ Carbon::parse($cert->cert_recd)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->cert_exp)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->reminder)->format('D, M d Y')}}
		<td>@if($cert->certificate) <a target="_blank"{{link_to("http://www.precisemaintenance.com/ExcelBI/public/uploads/$cert->certificate", 'View Image')}}@endif<tr>

@endforeach
</table>
@endif
@stop
