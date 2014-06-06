@extends('layouts.admin')
@section('top_left_1')

{{ Form::open(array('route' => 'make_cert', 'method' => 'post')) }}

<table width="50%">

	<td>{{ Form::label('name', 'Certificate Name:') }}
	<td>{{	Form::text('name') }}
		<tr>
	<td>Valid For:
	<td>{{ Form::select('term', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10') )}}
		{{ Form::select('term_', array('addmonths' => 'Months', 'addyears' => 'Years') )}} Before Expiration
		<tr>
</table>




{{ Form::label('desc', 'Description:')}}<br>
{{ Form::textarea('desc')}}<br><br>

{{ Form::submit('Add Certification!')}}

{{ Form::close()}}

@stop