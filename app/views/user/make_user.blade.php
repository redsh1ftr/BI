@extends('layouts.admin')
@section('top_left_1')

{{ Form::open(array('route' => 'make_user', 'method' => 'post')) }}



<table width="50%">

	<td>{{ Form::label('f_name', 'First Name:') }}
	<td>{{	Form::text('f_name') }}
		<tr>
	<td>{{ Form::label('m_name', 'Middle Name:') }}
	<td>{{	Form::text('m_name') }}
		<tr>
	<td>{{ Form::label('l_name', 'Last Name:') }}
	<td>{{	Form::text('l_name') }}
		<tr>
	<td>{{ Form::label('street1', 'Street:') }}
	<td>{{	Form::text('street1') }}
		<tr>
	<td>{{ Form::label('street2', 'Apt/Ste:') }}
	<td>{{	Form::text('street2') }}
		<tr>
	<td>{{ Form::label('city', 'City:') }}
	<td>{{	Form::text('city') }}
		<tr>
	<td>{{ Form::label('state', 'State:') }}
	<td>{{	Form::text('state') }}
		<tr>
	<td>{{ Form::label('zip', 'Zip:') }}
	<td>{{	Form::text('zip') }}
		<tr>
	<td>{{ Form::label('phone', 'Phone') }}
	<td>{{	Form::text('phone') }}
		<tr>
	<td>{{ Form::label('email', 'E-mail:') }}
	<td>{{	Form::text('email') }}
		<tr>
	<td>{{ Form::label('dob', 'Birthday') }}
	<td><input type="text" id="datepicker" name="dob">
		<tr>
	<td>{{ Form::label('hire_date', 'Hire Date')}}
	<td><input type="text" id="datepicker2" name="hire_date">
		<tr>
</table>

{{ Form::submit('Add New User!')}}

{{ Form::close()}}

@stop