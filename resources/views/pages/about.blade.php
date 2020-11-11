@extends('app')

@section('title','About Us | ' . config('app.name'))

@section('content')
<img src="{{ asset('/images/favicon.png') }}" alt="Wildnano">
    <p>Build by &hearts; by Wildnano.</p>
    <p><a href="{{ route('app_home') }}">Revenir à l'accueil</a></p>
@endsection