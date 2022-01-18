@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/news.css')}}">
@section('content')
    <main>
        <div class="jumbo-container">
            <div class="image">
                <img src="https://cdn.wallpapersafari.com/74/71/fkaHAP.jpg" alt="">
            </div>
            <div class="title">
                <h1>Our News</h1>
            </div>
        </div>
        <div class="news-container">
            @foreach($articles as $article)
                <div class="news">
                    <div class="left">
                        <div class="image">
                            <img src="https://picsum.photos/id/{{$article['imageId']}}/700/350" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <div class="title">
                            <h1>{{$article['title']}}</h1>
                        </div>
                        <div class="description">
                            <p>{{$article['description']}}</p>
                        </div>
                        <div class="date">
                            <p>{{$article['date']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <script>
        let newses = document.getElementsByClassName('news');
        for(let i=0;i<newses.length;i++){
            if(i%2 == 0){
                newses[i].classList.add('reverse');
            }
        }
    </script>
@endsection