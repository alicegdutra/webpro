<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main>
        <h3>Sistema de Gestão de Estoque - login</h3>
        <form action="/login" method="POST">
            @CSRF
            <div class="row">
                <div class="col">
                    <label for="email" class="form-label">Informe o email</label>
                    <input id="email" name="email" class="form-control" type="mail">
                </div>
                <div class="col">
                    <label for="password" class="form-label">Informe a senha</label>
                    <input id="password" name="password" class="form-control" type="password">
                </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-info">Acessar</button>
                </div>
            </div>
                

                
            

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>