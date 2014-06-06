extends('layouts.admin')
@section('left_top_1')


@foreach($users as $user)
{{link_to_route('user_profile) "$user->f_name $user->m_name $user->l_name", $user->id}}
@endforeach

@stop