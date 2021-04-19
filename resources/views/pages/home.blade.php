@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-10">
        <div class="row justify-content-center">
            <img src=" {{asset('images/drapeau_quebec.png') }}" alt="Drapeau du Québec" class="img-fluid">
        </div>
        <div class="row justify-content-center">
            <h1 class = "text-center">Hello from Québec</h1>
        </div>
        <div class="row justify-content-center">
            <p>It is currently {{ date('h:i A') }}</p>
        </div>
    </div>
</div>
@endsection('section')