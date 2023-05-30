@extends('layout.master')

@section('title', 'Book Detail')

@section('content')

<div class="container">

<a class="btn btn-secondary text-decoration-none ms-5" href="/">Back</a>

<div class="container w-75">
    <p class="text-secondary fs-5 text-decoration-underline">{{ $post->subtitle }}</>
        <h1 class="fs-1">{{ $post->title }}</h1>

        <p class="text-secondary fs-5">{{ $post->description }}</p>

        <div class="d-flex flex-row align-self-center ">
            <p class="my-auto me-3">By <b>{{ $post->author }}</b> | {{ $post->date }} </p>
            @if ($post->read_time <= 6)

            <div class="btn btn-success">Quick Reads</div>

            @elseif($post->read_time <= 10)
            <div class="btn btn-warning">Medium Reads</div>

            @else
            <div class="btn btn-danger">Long Reads</div>

            @endif
        </div>

        <div class="w-100 text-center my-3" style="height: 20rem; overflow: hidden">
            <img class="img-fluid w-100" src="{{ $post->image }}" alt="">
        </div>
        <div class="buttons w-25 d-flex justify-content-evenly mb-5">
            <a href="https://github.com/devinwong278/ " target="_blank" class="mx-2">
                <img class="img-fluid " src="{{ asset("asset/linkedin.png") }}" alt="">
            </a>
            <a href="https://www.linkedin.com/in/devin-wong-1602991a1/" target="_blank" class="mx-2">
                <img  class="img-fluid" src="{{ asset('asset/twitter.png') }}" alt="">
            </a>
            <a href="https://www.instagram.com/devinwong27/" class="mx-2" target="_blank">
                <img  class="img-fluid" src="{{ asset('asset/facebook.png') }}" alt="">
            </a>
            <a href="https://www.instagram.com/devinwong27/" class="mx-2" target="_blank">
                <img  class="img-fluid" src="{{ asset('asset/instagram.png') }}" alt="">
            </a>
        </div>
        {!! $post->body !!}

        <h5><b>Video Section</b></h5>
        {{-- <div class=""> --}}

            <iframe class="w-100" style="height: 10rem" src="https://www.youtube.com/embed/yD73z7Id-ko" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        {{-- </div> --}}
    </div>
</div>

@endsection
