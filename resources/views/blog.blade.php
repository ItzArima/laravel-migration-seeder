@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/blog.css')}}">
@section('content')
    <main>
        <div class="jumbo-container">
            <div class="image">
                <img src="https://cdn.wallpapersafari.com/74/47/auILT2.jpg" alt="">
            </div>
            <div class="title">
                <h1>Our Blog</h1>
            </div>
        </div>
        <div class="blog-container">
            @foreach($articles as $article)
                <a href="{{route('single', $article['id'])}}">
                    <div class="card" style="color: white;">
                        <div class="right">
                            <div class="img">
                                <img src="https://picsum.photos/id/{{$article['imageId']}}/500/350" alt="">
                            </div>
                        </div>
                        <div class="right">
                            <div class="title">
                                <h1>{{$article['title']}}</h1>
                            </div>
                            <div class="description">
                                <p>{{$article['description']}}</p>
                            </div>
                            <div class="bottom">
                                <div class="author">
                                    <img src="https://scuolareginaangelorum.it/images/collaboratori/user.png" alt style="filter: invert(1);">
                                    <p>{{$article['author']}}</p>
                                </div>
                                <div class="date">
                                    <p>{{$article['date']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </main>
@endsection