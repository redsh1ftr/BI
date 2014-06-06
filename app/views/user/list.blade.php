@extends('layouts.admin')
@section('top_left_1')

@foreach($users as $user)
{{link_to_route('user_profile', "$user->f_name $user->m_name $user->l_name", $user->id, array('id' => $user->id));}}<br>
@endforeach



@stop