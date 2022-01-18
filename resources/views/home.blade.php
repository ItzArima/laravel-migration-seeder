@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

@section('content')
    <main>
        <div class="jumbo-container">
            <img src="https://wallpaperbat.com/img/499515-plane-airport-hd-wallpaper-hd-wallpaper-4-us-us-navy-wallpaper-airplane-wallpaper-hd-wallpaper.jpg" alt="">
            <div class="text-container">
                <h1>R<em>Trips</em></h1>
                <h3>Trips for the life</h3>
            </div>
            @if(count($random)>0)
                <div class="suggested-container">
                    <h1>Suggested Trips</h1>
                    <div class="cards-container">
                        @foreach($random as $key => $card)                  
                            <div class="card">
                                <div class="image">
                                    <img src="https://picsum.photos/id/{{$images[$key]['id']}}/300/200" alt="">
                                </div>  
                                <div class="departure">
                                    <h2>From: {{$card->departure}}</h2>
                                </div>
                                <div class="destination">
                                    <h2>To: {{$card->destination}}</h2>
                                </div>
                                <div class="price">
                                    <p>{{$card->price}} EUR</p>
                                </div>
                                <div class="datetime">
                                    <p>Date and Time</p>
                                    <p>{{$card->date}}, {{$card->time}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        <div class="slogan-container">
            <h1>Wherever you want, Whenever you want</h1>
        </div>
    </main>
@endsection