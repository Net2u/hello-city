@extends('layouts.app', ['title' => 'About-Us'])

@section('content')
<div class="row justify-content-center">
    <div class="col-10">
        <div class="text-center">
            <img src="{{ asset('images/net2u.png')}}" alt="Net2u" class="img-fluid">
        </div>
        <div>
            <p class="text-center">Built with<span style="color:rgb(234, 0, 255);font-weight:bold">&hearts;</span> by net2u</p>
        </div>
    </div>
</div>
@endsection