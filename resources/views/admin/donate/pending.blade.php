@extends('layouts.adminlayout')
@section('title','PENDING PAGE')
@section('main_content')
<div class="container">
 @if(Auth::user()->group_id == 1)
        <h1>VOLUNTEERS</h1>
    @elseif(Auth::user()->group_id == 2)
        Menu Type 2
    @elseif(Auth::user()->group_id == 3)
        Menu Type 3
    @elseif(Auth::user()->group_id == 4)
        Menu Type 4
    @elseif(Auth::user()->group_id == 5)
	<h1 class="text-center text-uppercase">Ваш роль не подтвержден администратором сайта.Как подтвердит вы сможете управлять сайтом</h1>
    @endif
</div>
@endsection