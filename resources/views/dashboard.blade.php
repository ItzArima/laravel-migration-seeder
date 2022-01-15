@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

@section('content')
    <main>
        <form action="{{url('flight')}}" method="POST">
            @csrf
            <input type="text" name="departure" placeholder="Nome luogo di partenza">
            <input type="text" name="destination" placeholder="Nome luogo di destinazione">
            <input type="number" step="0.01" name="price" placeholder="Prezzo">
            <input type="date" name="date">
            <input type="time" name="time">
            <input type="submit" value="submit">
        </form>
        @if(Session::has('success'))
            <p><strong>{{Session::get('success') }}</strong></p>
        @endif
    </main>
@endsection