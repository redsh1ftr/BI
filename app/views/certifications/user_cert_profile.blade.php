@extends('layouts.admin')
@section('top_left_1')
<?php 

	$years = str_replace('addyears', 'Years', CertMain::where('id', '=', $cert->cert_id)->pluck('term_'));
	$termlength = str_replace('addmonths', 'Months', $years);	
?>

<table class="BlueTable">
{{ Form::open(array('route' => 'update_Cert', 'method' => 'post')) }}
<td><td><tr>



<td>Certificate<td>{{CertMain::where('id', '=', $cert->cert_id)->pluck('name') }} 
(valid for {{CertMain::where('id', '=', $cert->cert_id)->pluck('term')}} {{$termlength}}) <tr>
<td>Received<td>{{ Carbon::parse($cert->cert_recd)->format('D, M d Y') }}<tr> 
<td>Expires	<td>{{ Carbon::parse($cert->cert_exp)->format('D, M d Y') }}<tr>
<td>Reminder Date<td>{{ Carbon::parse($cert->reminder)->format('D, M d Y')}}<tr>
</table>


@stop