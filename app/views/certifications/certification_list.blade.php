@extends('layouts.admin')
@section('top_left_1')

@foreach($certs as $cert)
	{{link_to_route('cert_profileShow', $cert->name, $cert->id, array('id' => $cert->id))}}<br><br>
@endforeach
@stop