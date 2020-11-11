@extends('app')

@section('content')
<img src="{{ asset('/images/drapeau_madinina01.png') }}" alt="Madinina Flag">
    <h1>Hello from Madinina !</h1>
    <p>It's currently {{ date('h:i A') }}.</p>
@endsection