@extends('layouts.app')

@section('title', 'Cars')

@section('content')
<div class='container'>
    <h1>Cars</h1>
    <ul class="list-group">
        @foreach ($cars as $car)
        <li class="list-group-item">
            <a href="/cars/{{ $car->id }}">
                {{ $car->producer }} - {{ $car->title }}
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endsection

