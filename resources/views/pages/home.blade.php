@extends('app')

@section('content')
<img src="{{ asset('/images/drapeau_madinina01.png') }}" alt="Madinina Flag" class="mt-12 rounded h-32">

    <h1 class="mt-5 text-3xl sm:text-4xl font-semibold text-indigo-700">Hello from Madinina !</h1>

    <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }}.</p>
@endsection