@extends('layout.master')

@section('content')

@foreach($user as $value)

{{ $value->name }}
{{ $value->email }}

@endforeach