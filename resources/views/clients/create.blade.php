<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('clients.store')}}">
        @csrf
        <label>
            Nombre
        </label>
        <input type="text" placeholder="Nombre" name="name">
        <br>
        <label>
            Email
        </label>
        <input type="text" placeholder="Email" name="email">
        <br>
        <label>
            Phone number
        </label>
        <input type="text" placeholder="Phone number" name="phone_number">
        <br>

        <button type="submit">
            Guardar
        </button>
    </form>
</body>
</html>