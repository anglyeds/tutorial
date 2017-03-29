@extends('layout.master')

@section('content')

<h1>I am Store</h1>

{{ Auth::user()->name }}

@endsection