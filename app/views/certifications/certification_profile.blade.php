@extends('layouts.admin')
@section('top_left_1')

<table class="BlueTable">

<?php 

	$years = str_replace('addyears', 'Years', $certs->term_);
	$termlength = str_replace('addmonths', 'Months', $years);	
?>

<td>{{$certs->name}}<td>Valid for {{$certs->term}} {{ $termlength }}<tr>

<td><td>{{$certs->desc}}<tr>

</table>


@stop