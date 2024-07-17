@extends('layout.app')
@section('page-title', 'Movie List')
@section('head-cdn')
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
@endsection




    @section('main-content')


    <section class="container">
        @foreach ($movies as $movie)
            <article class="singleFilm">
                <div>
                    <h1>{{ $movie['title']}}</h1>
                    <h2>{{ $movie['original_title']}}</h2>
                    <p>{{ $movie['nationality']}}</p>
                    <p>{{ $movie['date']}}</p>
                    <p>{{ $movie['vote']}}</p>
                </div>
            </article>
            @endforeach
        </section>


    @endsection
