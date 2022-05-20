@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <h1>Welcome {{ $name }}!</h1>
    <h1>I'm {{ $age }} years old</h1>
@endsection


