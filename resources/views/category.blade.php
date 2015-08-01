@extends('layouts.default')

@section('catdescription')
               
                    <h1 class="page-header">
                        {{ $catdescription->description }}
                        
                    </h1>
               
@endsection
@section('content')
    @foreach($posts as $post)
    <h2>
        <a href="{{ route('viewpost',$post->id) }}">{{ $post->title }}</a>
    </h2>
    <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at->format('F j, Y, g:i a') }}</p>
    <hr>
    <img class="img-responsive" src="{{URL::asset($post->img)}}" alt="">
    <hr>
    <p>{{ $post->description }}</p>
    <a class="btn btn-primary" href="{{ route('viewpost',$post->id) }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>
    @endforeach
@endsection
@section('pagination')

  {!! str_replace('/?', '?', $posts->render()) !!}
               
@endsection