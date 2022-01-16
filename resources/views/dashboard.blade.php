@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

@section('content')
    <main>
        @if(Session::has('success'))
            <div class="success">
                <p><strong>{{Session::get('success') }}</strong></p>
            </div>
        @endif
        <div class="dashboard-container">
            <h1>DASHBOARD</h1>
            <div class="form-container">
                <h4>Add a trip to db</h4>
                <form action="{{url('flight')}}" method="POST">
                    @csrf
                    <input type="text" name="departure" placeholder="Nome luogo di partenza" required>
                    <input type="text" name="destination" placeholder="Nome luogo di destinazione" required>
                    <input type="number" step="0.01" name="price" placeholder="Prezzo" required>
                    <input type="date" name="date" required>
                    <input type="time" name="time" required>
                    <input type="submit" value="submit">
                </form>
            </div>
            <div class="db-content-container">
                <div class="row-container">
                    <div class="row">
                        <div class="id">
                            <h1>ID</h1>
                        </div>
                        <div class="departure">
                            <h1>DEPARTURE</h1>
                        </div>
                        <div class="destination">
                            <h1>DESTINATION</h1>
                        </div>
                        <div class="price">
                            <h1>PRICE</h1>
                        </div>
                        <div class="date">
                            <h1>DATE</h1>
                        </div>
                        <div class="time">
                            <h1>TIME</h1>
                        </div>
                    </div>
                </div>
                @if(count(DB::table('flights')->get()) > 0)
                    @foreach($display as $item)
                        <div class="row-container">
                            <div class="row">
                                <div class="id">
                                    <p>{{$item->id}}</p>
                                </div>
                                <div class="departure">
                                    <p>{{$item->departure}}</p>
                                </div>
                                <div class="destination">
                                    <p>{{$item->destination}}</p>
                                </div>
                                <div class="price">
                                    <p>{{number_format((float)$item->price, 2 , '.' , '')}}</p>
                                </div>
                                <div class="date">
                                    <p>{{$item->date}}</p>
                                </div>
                                <div class="time">
                                    <p>{{$item->time}}</p>
                                </div>
                            </div>
                            <form action="{{action('FlightController@destroy' , $item->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">X</button>
                            </form>
                        </div>
                    @endforeach
                @else
                    <div class="empty" style="color:white;">
                        <h1>Seems that your flights table is empty!</h1>
                        <p>Tip: There is a seeder with faker factory.</p>
                    </div>
                @endif
                <div class="page-selection-container">
                    @if($page != 1)
                        <a href="{{route('dashboard', ['page' => $page-1])}}">Previous</a>
                    @endif
                    <p>{{$page}}</p>
                    @if($nonext != 1)
                        <a href="{{route('dashboard', ['page' => $page+1])}}">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </main>

    <script>
        let popup = document.querySelector('.success');
        if(popup != null){
            let displayTimeout = setTimeout(function disappear(){
                popup.style.display ='none';
            }, 3500)
            let opacityTimeout = setTimeout(function opacity(){
                popup.classList.add('disappear');
            }, 2000);
        }
    </script>
@endsection