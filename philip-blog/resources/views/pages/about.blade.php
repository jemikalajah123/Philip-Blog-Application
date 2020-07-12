@extends('layouts.app')

@section('content')
    <h1><?php echo $title; ?></h1>
    <p> Hi, I am Philip, a Software Engineer that loves to solve problems.</p>
    <p>This is my first laravel application and i am super excited. It has a blogging feature, please do well to register
        <a class="btn btn-success btn-sm" href="/register" role="button">Register</a> and Let's blog about our life experiences in 
        related to education, work, health and whatever you feel like sharing.</p>
    
    <img style="width: 100%" src="/storage/cover_images/tech.jpg">
@endsection
