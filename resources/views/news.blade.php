@extends('layouts.main')

@section('title', 'Berita')

{{-- @include('partials.header') --}}

@section('content')
<link rel="stylesheet" href="css/news.css">
{{-- @dd($posts) --}}
@foreach($posts as $post)
<article>
    <div class="container news__container">
        <h2>
            <a href="/news/{{$post["slug"]}}">{{ $post["title"] }}</a>
        </h2>
        <h5>By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"]}}</p>
    </div>
</article>
@endforeach
@endsection