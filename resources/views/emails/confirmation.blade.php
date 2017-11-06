<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
  </head>
  <body>
    <div class="container">
      <h1>Obrigado por se registrar!</h1>
      <p>
        Voce precisa confirmar seu email, por favor clique
        <a href="{{ url('/register/confirm/'.$user->token) }}">aqui</a> para confirmar.
      </p>
      Obrigada,<br>
      {{ config('app.name') }}
    </div>
  </body>
</html>
