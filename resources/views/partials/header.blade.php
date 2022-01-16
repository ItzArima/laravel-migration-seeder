<header>
    <div class="header-container">
        <div class="left">
            <div class="logo">
                 <h1>R<em>Trips</em></h1>
            </div>
        </div>
        <div class="right">
            <nav>
                @foreach(config('header-links') as $key => $item)
                    <a href="{{$key == 1 ? $item['href'] : route($item['href'])}}">{{$item['name']}}</a>
                @endforeach
            </nav>
        </div>
    </div>
</header>