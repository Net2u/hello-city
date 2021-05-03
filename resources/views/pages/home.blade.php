@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-10">
        <div class="text-center">
            <img src=" {{asset('images/drapeau_quebec.png') }}" alt="Drapeau du Québec" class="img-fluid">
        </div>
        <div>
            <h1 class="text-center">Hello from Québec</h1>
        </div>
        <div>
            <p class="text-center">It is currently {{ date('h:i A') }}</p>
        </div>
    </div>
</div>
@endsection('section')