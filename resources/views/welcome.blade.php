@extends('template')

@section('content')
    <section class="blogs">
        <h1 class="title">Blogs </h1>
        @foreach ($blogs as $blog)
            <article class="blog">
                <h2 class="blog__title">{{ $blog->title }}</h2>
                <p class="blog__short_description"> {{ substr($blog->content, 0, 300)  }} ...</p>
                <div class="details">
                    <p class="details__date">{{ $blog->created_at }}</p>
                    <a class="details_btn_see_more" href="/blog/{{$blog->slug}}">ver más</a>
                </div>
            </article>
        @endforeach

    </section>

@endsection
