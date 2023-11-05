@extends('layout.template')

@section('title', 'Homepage')

@section('content')
<style>
    body{
        background-color: black;
    }
</style>

<h1 class="text-center text-light">Popular Movie</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-lg-6">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="/images/{{ $movie['foto_sampul'] }}" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ $movie['judul'] }}</h5>
                      <p class="card-text">{{ $movie['sinopsis'] }}</p>
                      <p><img src="/images/rate.png" width="23px" />Rating -  {{ $movie['rate'] }}</p>
                      <a href="/movie/{{ $movie['id'] }}" class="btn btn-success">Show Details</a>
                      <a href="#" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                            <path d="M3.97.825a.5.5 0 0 1 .5.154l9 7a.5.5 0 0 1 0 .692l-9 7a.5.5 0 0 1-.846-.385V1.21a.5.5 0 0 1 .846-.385l.001.998z"/>
                        </svg>
                        Watch Movie
                    </a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
@endsection
