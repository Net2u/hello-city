@extends('app')

@section('titre', 'About | ' . config('app.name'))
   
@section('content')

<img src="/images/net2u.png" alt="Net2u">

<p>Built with &hearts; by net2u</p>

<p><a href=" {{ route('home') }}">Page accueil</a></p>

@endsection