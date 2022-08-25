<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor/css/style.css">
    <title>Login</title>
</head>
<body>
<section class="loginsection" id="login">
    <div class="loginsection__login">
        <div>
            <img src="vendor/img/logo.png">
        </div>
        <form action="post" method="post">
            @csrf
            <input type="text" name="Email" placeholder="Email" autofocus required>
            <input type="password" name="Password" placeholder="Password">
            <input type="submit" value="entrar">
        </form>
        {{-- <p>Não possui conta? <a href="">Cadastrar</a></p> --}}
    </div>
</section>
</body>
</html>
