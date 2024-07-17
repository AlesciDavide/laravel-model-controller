@extends('layout.app')
@section('page-title', 'Movie List')





    @section('main-content')


    @foreach ($movies as $movie)
        <section class="container">
            <article class="singleFilm">
                <div>
                    <h1>{{ $movie['title']}}</h1>
                    <h2>{{ $movie['original_title']}}</h2>
                    <p>{{ $movie['nationality']}}</p>
                    <p>{{ $movie['date']}}</p>
                    <p>{{ $movie['vote']}}</p>
                </div>
            </article>
        </section>
    @endforeach


    @endsection
