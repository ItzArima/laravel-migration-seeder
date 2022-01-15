@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

@section('content')
    <main>
        <div class="jumbo-container">
            <img src="https://picsum.photos/id/1083/1920/1080" alt="">
            <div class="text-container">
                <h1>Trips for the life</h1>
            </div>
        </div>
    </main>
@endsection