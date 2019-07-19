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
        <style>
            #caixacadastro,
            #caixarecuperarsenha,
            #alerta{
                display: none;
            }
        </style>
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
        <section class="row mb-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixalogin">
                <h2 class="text-center mt-2">Entrada no Sistema</h2>
                <form action="#" id="formlogin" class="p-2">
                    <div class="form-group">
                        <input type="nomeUsuario" class="form-control"
                        placeholder="Nome do Usuário" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="senhaUsuario" class="form-control"
                        placeholder="Senha" required>
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
                        <input type="submit" value="entrar" name="btnentrar"
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

        <section class="row mb-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixacadastro">
                <h2 class="text-center">Cadastro de novo usuário</h2>
                <form action="#" class="p-2" id="frmcadastro">
                <div class="form-group">
                    <input type="text" name="nomecompleto" id="nomecompleto" class="form-control"
                    placeholder="Nome completo" required>
                </div>
                <div class="form-group">
                <input type="text" name="nomeusuario" id="nomeusuario" class="form-control"
                    placeholder="Nome de Usuário" required>
                </div>
                <div class="form-group">
                    <input type="email" name="emailusuario" id="emailusuario" class="form-control"
                    placeholder="E-mail de Usuário" required>
                </div>
                <div class="form-group">
                    <input type="password" name="senhausuario" id="senhausuario" class="form-control"
                    placeholder="Digite sua senha" required>
                </div>
                <div class="form-group">
                <input type="password" name="senhaconfirma" id="senhaconfirma" class="form-control"
                    placeholder="Confirme a sua senha" required>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="concordar" id="concordar" class="custom-control-input">
                        <label for="concordar" class="custom-control-label">
                        Eu concordo com os <a href="#">termos e condições.</a>                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value=" Registrar "
                    class="btn btn-primary btn-block" id="btnregistrar">
                </div>
                <div class="form-group">
                    <p class="text-center"> Já cadastrado? <a href="#" id="btnjacadastrado"> Entar Aqui </a></p>
                </div>
                
                </form>

            </div>

        </section>

        <section class="row mb-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixarecuperarsenha">
                <h2 class="text-center">Gerar nova senha</h2>
                <form action="#" id="formsenha">
                    <div class="form-group">
                        <small class="text-muted">
                            para gerar uma nova senha, digite seu e-mail e receba as instruções.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="email" name="emailsenha" id="emailsenha" class="form-control"
                        placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value=" Enviar E-mail " id="btninstruçoes" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group float-right">
                        <a href="#" id="btnvoltar">Voltar</a>
                    </div>
                </form>
            </div>
            

        </section>

    </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script>
            $(function(){
                $("#btnesqueci").click(function(){
                    $("#caixalogin").hide();
                    $("#caixarecuperarsenha").show();
                });
                $("#btnvoltar").click(function(){
                    $("#caixarecuperarsenha").hide();
                    $("#caixalogin").show();
                });
                $("#btncadastrar").click(function(){
                    $("#caixalogin").hide();
                    $("#caixacadastro").show();
                })
                $("#btnjacadastrado").click(function(){
                    $("#caixacadastro").hide();
                    $("#caixalogin").show();
                })
            });
        </script>    
    </body>
</html>