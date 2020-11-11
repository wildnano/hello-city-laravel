@extends('app')

@section('title','About Us | ' . config('app.name'))

@section('content')
    <p>Build by &hearts; by Wildnano.</p>
    <p><a href="{{ route('app_home') }}">Revenir à l'accueil</a></p>
@endsection