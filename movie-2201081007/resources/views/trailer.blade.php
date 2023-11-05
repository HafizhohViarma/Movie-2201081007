@extends('layout.template')

@section('title', $movie['judul'])

@section('content')

@if ($movie)
<div>
    <h1>Video Player</h1>
    <video width="640" height="360" controls>
        <source src="{{ $movie ['trailer'] }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
@else
<div class="alert alert-danger" role="alert">
    Pemutaran Video Error!
</div>
<a href="/" class="btn btn-success">Kembali</a>
@endif
@endsection
