@extends('layouts.admin')
@section('top_left_1')

<table class="BlueTable">
<td>Certifications<tr>
@foreach($certs as $cert)
	<td>{{link_to_route('cert_profileShow', $cert->name, $cert->id, array('id' => $cert->id))}}<tr>
@endforeach
</table>
@stop