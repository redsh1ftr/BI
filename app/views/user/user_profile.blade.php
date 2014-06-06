@extends('layouts.user_profile')

@section('top_left_1')


<h2>{{$user->f_name}} {{$user->m_name}} {{$user->l_name}}</h2>



<table>

@if($user->street2)
	<td>{{$user->street1}}, {{$user->street2}}<tr>
@else
	<td>{{$user->street1}}<tr>
@endif
	<td>{{$user->city}} {{$user->state}}, {{$user->zip}}<tr>
</table>




<table>
	<td>Hire Date:<td>{{Carbon::parse($user->hire_date)->format('D, M d Y')}}<tr>
	<td>Birthday:<td>{{Carbon::parse($user->dob)->format('D, M d Y')}}<tr>
	<td>Phone:<td>{{$user->phone}}<tr>
</table>
{{HTML::mailto($user->email)}}


@stop


@section('top_right_1')




<table align="center" width="100%" border="1">
		<th>Certification</th>
		<th>Received</th>
		<th>Expires</th>
		<th>Reminder</th>
		<th>Image</th></tr>
	
@foreach($certs as $cert)

		<td>{{ CertMain::where('id', '=', $cert->cert_id)->pluck('name') }} 
		<td>{{ Carbon::parse($cert->cert_recd)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->cert_exp)->format('D, M d Y') }} 
		<td>{{ Carbon::parse($cert->reminder)->format('D, M d Y')}}
		<td>@if($cert->certificate) {{link_to("http://www.precisemaintenance.com/ExcelBI/public/uploads/$cert->certificate", 'View Image')}}@endif<tr>

@endforeach
</table>



@stop