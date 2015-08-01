@extends('layouts.default')

@section('catdescription')
               
                    <h1 class="page-header">
                       {{ $post->title }}
                        
                    </h1>
               
@endsection
@section('content')
                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at->format('F j, Y, g:i a') }}</p>

                <hr>
                <!-- Preview Image -->
                <img class="img-responsive" src="{{ URL::asset($post->img) }}" alt="">
                <hr>
                <!-- Post Content -->
                <p class="lead">{{ $post->description }}</p>
                <p>{{ $post->content }}</p>
                <p>{{ $post->content }}</p>
@endsection