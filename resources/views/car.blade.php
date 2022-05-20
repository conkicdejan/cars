@extends('layouts.app')

@section('title')
    {{ $car->producer }} - {{ $car->title }}
@endsection

@section('content')
    <h1>{{ $car->producer }}</h1>
    <p>{{ $car->created_at }}</p>
    <p>{{ $car->title }}</p>
@endsection

