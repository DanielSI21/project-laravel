<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('clients.update')}}">
        @csrf
        @method('put')
        
        <label>
            Nombre
        </label>
        <input type="text" placeholder="Nombre" name="name" value="{{$client->name}}"">
        <br>
        <label>
            Email
        </label>
        <input type="text" placeholder="Email" name="email" value="{{$client->email}}"">
        <br>
        <label>
            Phone number
        </label>
        <input type="text" placeholder="Phone number" name="phone_number" value="{{$client->phone_number}}"">
        <br>

        <input type="hidden" name="id" value="{{$client->id}}">

        <button type="submit">
            Guardar
        </button>
    </form>
</body>
</html>