@extends('layouts.app')

@section('title')
    {{ $car->producer }} - {{ $car->title }}
@endsection

@section('content')
    <div class='container'>
        <h1>{{ $car->producer }}</h1>
        <p>{{ $car->title }}</p>
        <p class='badge'>{{ $car->created_at }}</p>
    </div>
@endsection

