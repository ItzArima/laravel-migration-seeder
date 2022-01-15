<header>
    <div class="header-container">
        <div class="left">
            <div class="logo">
                 <h1>R<em>Trips</em></h1>
            </div>
        </div>
        <div class="right">
            <nav>
                @foreach(config('header-links') as $item)
                    <a href="{{$item['href']}}">{{$item['name']}}</a>
                @endforeach
            </nav>
        </div>
    </div>
</header>