@extends('layouts.app')

@section('page_title')
    Home
@endsection

@section('main_content')
    
    @foreach ($movies as $movie)

        <h2>title</h2>
        <div>original title</div>
        <div>nationality</div>
        <div>date</div>
        <div>vote</div>

    @endforeach

@endsection