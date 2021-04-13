@extends('app')

@section('titre', 'About | ' . config('app.name'))

@section('content')
<div class="row justify-content-center">
    <div class="col-10">
        <div class="row justify-content-center">
            <img src="{{ asset('images/net2u.png')}}" alt="Net2u" class="img-fluid">
        </div>
        <div class="row justify-content-center">
            <p>Built with<span style="color:rgb(234, 0, 255);font-weight:bold">&hearts;</span> by net2u</p>
        </div>
        <div class="row justify-content-center">
            <p><a href=" {{ route('home') }}">Page accueil</a></p>
        </div>
    </div>
</div>
@endsection