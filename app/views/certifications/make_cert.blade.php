@extends('layouts.admin')
@section('top_left_1')

{{ Form::open(array('route' => 'make_cert', 'method' => 'post')) }}

<table class="BlueTable"><td><td><tr>

	<td>{{ Form::label('name', 'Certificate Name:') }}
	<td>{{	Form::text('name') }}
		<tr>
	<td>Remind Me
	<td>{{ Form::select('term', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10') )}}
		{{ Form::select('term_', array('addmonths' => 'Months', 'addyears' => 'Years') )}}
		<tr>
	<td>{{ Form::label('desc', 'Description:')}}
	<td>{{ Form::textarea('desc')}}<tr>
</table>



<br>

{{ Form::submit('Add Certification!')}}

{{ Form::close()}}

@stop