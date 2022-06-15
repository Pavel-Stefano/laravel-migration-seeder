@extends('layouts.default')

@section('pageTitle, Voli')

@section('mainContent')
    <h1 class="text-center">Parti con Noi <i class="fa-solid fa-plane-departure"></i></h1>
    <div class="card mb-3">
      <img src="https://cmsmedia.titanka.com/www.hotelcalarosa.it/crp767x430-sf-spiaggia.jpg?v=1654593230" class="card-img-top" style="width: 500px" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$holiday->city}}</h5>
        <p class="card-text">{{$holiday->description}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="text-center">
      <button>
          <a href="{{route('holidays')}}">torna alle offerte</a>
      </button>
      <button>
          <a href="{{route('welcome')}}">torna alla home</a>
      </button>
  </div>
@endsection