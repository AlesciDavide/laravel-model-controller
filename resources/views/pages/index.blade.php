@extends('layout.app')
@section('page-title', 'Movie List')





    @section('main-content')
    @dump($movies)

    @foreach ($movies as $movie)
        <article class="container text-center">
            <section class="row">
                <div class="col">

                    <p>{{ $movie['title']}}</p>
                </div>
            </section>
        </article>
    @endforeach


    @endsection
