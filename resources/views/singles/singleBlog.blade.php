@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/singleBlog.css')}}">

@section('content')
    @if(Session::has('error'))
    <main>
        <div class="error">
            <p>{{Session::get('error')}}</p>
        </div>
    </main>
    @else
        <main style="color: white;">
            <div class="post-container">
                <div class="image" style="background-image: url('https://picsum.photos/id/{{$article['imageId']}}/1920/1080');">
                </div>
                <div class="title">
                    <h1>{{$article['title']}}</h1>
                </div>
                <div class="content">
                    <div class="description">
                        <h4>{{$article['description']}}</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque veritatis natus saepe libero aspernatur blanditiis nisi, optio provident in omnis minus quidem quibusdam ad placeat nesciunt excepturi quis, modi quasi.</p>
                    </div>
                    <div class="infos">
                        <div class="author">
                            <p>{{$article['author']}}</p>
                        </div>
                        <div class="date">
                            <p>{{$article['date']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endif
@endsection