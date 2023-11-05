@extends('layout.template')

@section('title', $movie['judul'])

@section('content')
<style>
    body {
        background-color: #000; /* Ganti dengan warna latar belakang yang Anda inginkan */
        color: #fff; /* Warna teks yang kontras dengan latar belakang */
    }
</style>
@if ($movie)
<div class="col-lg-12">
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="/images/{{ $movie['foto_sampul'] }}" class="img-fluid rounded-start">
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h1 class="card-title">{{ $movie['judul'] }}</h1>
              <p class="card-text text-primary">{{ $movie['time'] }} min | {{ $movie['genre'] }}</p>
              <p class="card-text"><img src="/images/rate.png" width="23px" /><b>Rating : </b>{{ $movie['rate'] }}</p>
              <p class="card-text"><b>Synopsis : </b><br> {{ $movie['sinopsis'] }}</p>
              <p class="card-text"><b>Tahun : </b> {{ $movie['tahun'] }}</p>
              <p class="card-text"><b>Pemain : </b> {{ implode(', ',$movie['pemain']) }}</p>
              <a href="/" class="btn btn-success">Kembali</a>
              <a href="#" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                    <path d="M5 1.5a.5.5 0 0 1 .5.5V14a.5.5 0 0 1-1 0V2a.5.5 0 0 1 .5-.5zm5 0a.5.5 0 0 1 .5.5V14a.5.5 0 0 1-1 0V2a.5.5 0 0 1 .5-.5z"/>
                    <path fill-rule="evenodd" d="M1.07.293a.5.5 0 0 1 .708 0L5 3.793V1.5a.5.5 0 0 1 1 0V5.29l3.22-3.22a.5.5 0 0 1 .708 0l5 5a.5.5 0 0 1 0 .708l-5 5a.5.5 0 0 1-.708 0l-5-5a.5.5 0 0 1 0-.708l3.22-3.22H1.5a.5.5 0 0 1 0-1z"/>
                </svg>
                Trailer
            </a>

            </div>
          </div>
        </div>
      </div>
</div>
@else
<div class="alert alert-danger" role="alert">
    Data film tidak ditemukan!
</div>
<a href="/" class="btn btn-success">Kembali</a>
@endif
@endsection
