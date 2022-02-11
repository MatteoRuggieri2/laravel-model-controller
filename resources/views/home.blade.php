@extends('layouts.app')

@section('page_title')
    Home
@endsection

@section('main_content')
    
    @foreach ($movies as $movie)

        <div class="movie-card">
            <h2>{{ $movie->title }}</h2>
            <div>Original Title: {{ $movie->original_title }}</div>
            <div>Nationality: {{ $movie->nationality }}</div>
            <div>Date: {{ $movie->date }}</div>
            <div>Vote: {{ $movie->vote }}</div>
        </div>

    @endforeach

@endsection