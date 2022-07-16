{{-- @dd($post); --}}
@extends('layouts.main')

@section('title', 'Postingan')

@section('content')
<article style="margin: 5rem auto 3rem">
    <div class="container news__container">
        <h2>{{ $post["title"] }}</h2>
        <h5>By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </div>
</article>

<div class="container" style="margin-bottom: 2rem">
    <a href="/news">Kembali ke halaman Berita</a>
</div>
@endsection