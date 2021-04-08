@extends('app')

@section('titre')
Hello City
@endsection

@section('content')

<img src="/images/drapeau_quebec.png" alt="Drapeau du Québec">

<h1>Hello from Québec</h1>

<p>It is currently {{ date('h:i A') }}</p>

@endsection('section')