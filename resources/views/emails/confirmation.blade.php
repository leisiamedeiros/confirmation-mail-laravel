<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <div class="content">
          <h1>Obrigado por se registrar!</h1>

          <p>
            Voce precisa confirmar seu email, por favor clique
            <a href="{{ url('/register/confirm/'.$user->token) }}">aqui</a> para confirmar.
          </p>
        </div>
    </body>
</html>
