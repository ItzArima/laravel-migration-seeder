<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <!-- Header -->
    </header>
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
    <footer>
        <!-- Footer -->
    </footer>
</body>
</html>