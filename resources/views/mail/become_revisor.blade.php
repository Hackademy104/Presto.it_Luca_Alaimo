<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>

    <h1>Un Utente ha richiesto di lavorare con noi!</h1>
    <h2>Ecco i suoi dati:</h2>
    <p>Nome : {{$user->name}}</p>
    <p>Email : {{$user->email}}</p>
    <p>Clicca qui se vuoi renderlo revisore!</p>
    <a class="btn btn-custom" href="{{route('make.revisor', compact('user'))}}">Rendi Revisore</a>
</body>
</html>