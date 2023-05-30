@extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="container">
        <section id="highlight" class=" d-flex justify-content-center mb-3 p-2 border border-3 border-dark">
            <a href="/detail/{{ $highlight->id }}" class="d-flex container justify-content-center text-decoration-none">
                <img class="img-fluid w-50" src="{{ $highlight->image }}" alt="" style="height: 15rem">
                <div class="mx-2 align-self-center d-flex flex-column ">
                    <p class="fs-5 text-secondary text-decoration-underline">{{ $highlight->subtitle }}</p>
                    <h1 class="text-dark">{{ $highlight->title }}</h1>
                    <p class="text-dark">{{ $highlight->description }}</p>
                </div>
            </a>
        </section>

        <section id="latest" class="justify-content-center py-3 px-5 mb-3 border border-3 border-dark">
            <h5 class=" text-decoration-underline mb-3">LATEST BOOK REVIEWS</h5>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-md-3">
                        <a class="text-decoration-none" href="/detail/{{ $latest[$i]->id }}">
                            <div class="card">
                                <img src="{{ $latest[$i]->image }}" class="card-img-top" alt="..." >
                                <div class="card-body">
                                    <h5 class="card-title">{{ $latest[$i]->title }}</h5>
                                    <p class="card-text">{{ $latest[$i]->description }}</p>

                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </section>

</div>

        <section id="book" class="bg-dark">
            <div class="container py-3">

               <div class="justify-content-center py-3 px-5 mb-3 border border-3">
                <h1 class="fs-5 text-decoration-underline text-white mb-3">Book Series Review</h1>

                <div class="row">
                    @foreach ($posts as $post)


                        <div class="col-md-4">

                                <div class="card mb-3" >
                                    <img src="{{ $post->image }}" class="card-img-top" alt="...">
                                    <div class="card-body bg-dark " >
                                        <h5 class="card-title text-white">{{ $post->title }}</h5>
                                        <p class="card-text text-white">{{ $post->description }}</p>
                                        <a href="/detail/{{ $post->id }}" class="btn btn-dark border border-white">Read Post</a>
                                    </div>
                                </div>

                        </div>
                    @endforeach
                </div>
               </div>
            </div>
        </section>

        

@endsection
