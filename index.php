<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Sistema de Login LMY systems</title>
    </head>
    <body class="bg-dark">
    <main class="container mt-4">
        <section class="row">
            <div class="col-lg-4 offset-lg-4" id="alerta">
                <div class="alert alert-success text-center">
                    <strong id="resultado">
                        Maravilhoso mundo sem o Sublime!
                    </strong>
                </div>
            </div>
        </section>
        <section class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixalogin">
                <h2 class="text-center mt-2">Entrada no Sistema</h2>
                <form action="#" id="formlogin" class="p-2">
                    <div class="form-group">
                        <input type="nomeUsuario" class="form-control"
                        placenholder="Nome do Usuário">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senhaUsuario" class="form-control"
                        placenholder="Senha">
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="checkbox" name="lembrar" 
                            id="lembrar" class"custom-control-input">
                            <label for="lembrar" class="custom-control-label">
                            Lembrar de Mim
                            </label>
                            <a href="#" id="btnesqueci" class="float-right">
                            Esqueci a senha!
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="::entrar::" name="btnentrar"
                        class="btn btn-primary btn-block">
                    </div>

                    <div class="form-group">
                        <p class="center">Novo Usuário?
                        <a href="#" id="btncadastrar">Cadastre-se aqui.</a>
                        </p>
                    </div>
                </form>
            </div>
        </section>
</main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>