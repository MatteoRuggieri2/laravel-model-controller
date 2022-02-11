@extends('layouts.app')

@section('page_title')
    Home
@endsection

@section('main_content')
    
    <div class="container">
        <div class="moviecard-container">
            @include('components/moviecard')
        </div>
    </div>

@endsection