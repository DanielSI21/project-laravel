<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            <h1>Login</h1>
            <p>{{Auth::user()->name ?? "Sin log"}}</p>
            <div>
                <form method="post" action="{{route('login')}}">
                    @csrf
                    <label>
                        Email
                    </label>
                    <input type="text" placeholder="Email" name="email">
                    <br>
                    <label>
                        Contraseña
                    </label>
                    <input type="password" placeholder="Contraseña" name="password">
                    <br>
            
                    <button type="submit">
                        Ingresar
                    </button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>