@extends('layouts.admin')
@section('top_left_1')

{{ Form::open(array('route' => 'make_user_cert', 'files' => true, 'method' => 'post')) }}

{{ Form::hidden('uid', $id)}}
<table class="BlueTable">

<td><td><tr>
<td>{{ Form::label('cert_id', 'Choose Certificate:')}}
<td><select name="cert_id">


@foreach($cert_list as $cert)

<?php 

	$years = str_replace('addyears', 'Years', $cert->term_);
	$termlength = str_replace('addmonths', 'Months', $years);	
?>

<option value="{{  "$cert->id"   }}"=>{{ $cert->name }} ({{$cert->term}} {{$termlength}})
@endforeach
</select><tr>

<td>Certificate Received:<td><input type="text" id="datepicker" name="cert_recd"><tr>
<td>Certificate Reminder:<td>{{ Form::select('reminder', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10') )}}
{{ Form::select('reminder2', array('subDays' => 'Days', 'subweeks' => 'Weeks', 'subMonths' => 'Months') )}} Before Expiration<tr>
<td>Certificate Image:<td>{{ Form::file('certificate') }}<tr>
</table><br><br>
{{Form::submit("Add to $user->f_name $user->l_name")}}


{{Form::close()}}

@stop


