@extends('layouts.app', ['title' => 'About Us'])

@section('content')
    <img src="{{ asset('/images/favicon.png') }}" alt="Wildnano" class="my-12 rounded h-32">

    <h2 class="mb-5 text-gray-700">
        Build by <span class="text-pink-500">&hearts;</span> by Wildnano.
    </h2>

    <p>
        <a href="{{ route('app_home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à l'accueil</a>
    </p>
@endsection