@extends('layouts.default')

@section('pageTitle', 'parti con noi')

@section('mainContent')
    <h1 class="text-center">Scegli la tua meta <i class="fa-solid fa-plane-departure"></i></h1>
    <div class="container">
        <div class="row">
            @foreach ($holidays as $holiday)
                <div class="col">
                    
                    <div class="card" style="width: 18rem; margin-bottom: 50px;">
                        <div class="card-body">
                          <h5 class="card-title">{{$holiday->city}}</h5>
                          <p class="card-text">{{$holiday->description}}</p>
                          <a href="{{route('hday', $holiday->id)}}" class="btn btn-primary">Prenota</a>
                        </div>
                      </div>
                </div>
            @endforeach
            <div class="text-center">
                <button>
                    <a href="{{route('welcome')}}">torna alla home</a>
                </button>
            </div>
        </div>
    </div>
@endsection