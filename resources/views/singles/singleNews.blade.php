@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/singleNews.css')}}">

@section('content')
    @if(Session::has('error'))
        <div class="error">
            <p>{{Session::get('error')}}</p>
        </div>
    @else
        <main>
            <div class="news-container" style="color: white;">
                <div class="left">
                    <img src="https://picsum.photos/id/{{$article['imageId']}}/500/350" alt="">
                </div>
                <div class="right">
                    <div class="title">
                        <h1>{{$article['title']}}</h1>
                    </div>
                    <div class="desc">
                        <h4>{{$article['description']}}</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis dolore error earum debitis ipsa dicta quis suscipit vitae porro reprehenderit facilis laboriosam temporibus libero explicabo inventore natus eveniet ratione, consectetur autem excepturi nam voluptas. Totam excepturi officia repellat ullam nemo, cupiditate quo eaque. Ipsa cum iusto tenetur rem? Deleniti laudantium eligendi nihil ad eveniet placeat numquam itaque quis, reiciendis cum quod fugit minima tempore, explicabo voluptate mollitia! Totam ex aliquam culpa hic provident est magni, maxime ducimus eligendi veniam officiis delectus dignissimos harum beatae dolores voluptatum eveniet recusandae quia error cum dolore, esse repellendus sit non. Expedita quaerat beatae sed!</p>
                    </div>
                    <div class="date">
                        <p>{{$article['date']}}</p>
                    </div>
                </div>
            </div>
        </main>
    @endif
@endsection