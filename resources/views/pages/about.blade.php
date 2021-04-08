@extends('app')

@section('titre', 'About | ' . config('app.name'))
   
@section('content')

<p>Built with &hearts; by net2u</p>

<p><a href=" {{ route('home') }}">Page accueil</a></p>

@endsection