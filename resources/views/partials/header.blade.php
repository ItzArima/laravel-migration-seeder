<header>
    <div class="header-container">
        <div class="left">
            <div class="logo">
                <a href="{{route('home')}}"><h1>R<em>Trips</em></h1></a>
            </div>
        </div>
        <div class="right">
            <nav>
                @foreach(config('header-links') as $key => $item)
                    <a href="{{$key == 1 ? route($item['href'] , 1) : route($item['href'])}}">{{$item['name']}}</a>
                @endforeach
            </nav>
        </div>
    </div>
</header>