<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FestivalTube</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <style>
        *, 
        *:before, 
        *:after{
            box-sizing: border-box;
        }
        body {
            font-family: 'Lobster', cursive;
            font-size: 16px;
            background-color: #efefef;
            margin: 0px;
        }
        h1{
            margin: 0 0 15px;
        }
        article{
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        form {
            padding: 30px;
            background-color: #fff;
        }
        form > label {
            display: block;
            margin-bottom: 15px;
        }
        label > span {
            display: block;
        }
        .button-container{
            text-align: right;
        }
        .error {
            display: block;
            color: red;
        }
        
    </style>
</head>
<body>
    <article>
        <form action='{{ route('login.validation')}}' method="POST">
            @csrf
            <h1> Faça seu login, Tio</h1>
            <label>
                <span>Seu e-mail</span>
                <input type='text' name='email' />
                @error('email')
                    <small class="error">
                        {{ $message }}
                    </small>
                @enderror
            </label>
            <label>
                <span>Sua senha</span>
                <input type='password' name='senha' />
                @error('senha')
                    <small class="error">
                        {{ $message }}
                    </small>
                @enderror
            </label>
            <label class="button-container">
                <input type='submit' value='Logar' />
            </label>
        </form>
    </article>
</body>
</html>