@extends('layouts.main')

@section('title', 'Home')

@section('content')
{{-- header --}}
@include('partials.header')
{{-- end of header --}}

{{-- categories --}}
@include('partials.categories')
{{-- end of categories --}}

{{-- hall of achievement --}}
@include('partials.achievements')
{{-- end of hall of achievement --}}

{{-- FAQs --}}
@include('partials.faqs')
{{-- End of FAQs --}}

{{-- Pengurus Harian --}}
@include('partials.daily-manager')
{{-- End of Pengurus Harian --}}
@endsection
@show