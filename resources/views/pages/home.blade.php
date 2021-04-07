@extends('app')

@section('titre')
Hello City
@endsection

@section('content')

<h1>Hello from Québec</h1>

<p>It is currently {{ date('h:i A') }}</p>

@endsection('section')