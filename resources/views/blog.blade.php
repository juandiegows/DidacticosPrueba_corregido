@extends('template')

@section('content')
    <section class="blog_details">
        <a href="/">Volver</a>
        <h2 class="title">{{ $blog->title }}</h2>
        <p class="description">{{ $blog->content }}</p>
        <div class="details">
                    <p class="details__date">{{ $blog->created_at }}</p>
                             <p class="details__date">{{$blog->user->name}} {{$blog->user->last_name}}</p>
         </div>
    </section>
@endsection
