@extends('header')

@section('nav')
    <nav class="navbar navbar-expand-lg navbar-light text-white bg-success">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-4" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link text-white" href="{{route('users.index')}}" id="navbar" role="button" aria-expanded="false">
                    Felhasználók
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-2">
          {{-- <span>Belépve: {{Auth::user() -> name}}</span> --}}
        </div>
        <div class="col-1">
            <form action="/destroy" method="post">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-warning">Kilépés</button>
            </form>
        </div>
    </nav> 
@endsection