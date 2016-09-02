<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Edição de Usuários</title>

   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    
  </head>

  <body style="padding-top: 30px">
<div class="container theme-showcase" role="main">

        <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Edição de Usuários</h3>
          </div>
          <div class="panel-body">
              
              <form name="cadastroUsuario" method="POST" action="negocio/editar.php">

                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>         
                  <button type="submit" class="btn btn-default">Atualizar</button>
              </form>

          </div>
      </div>
    </div> 
   
  </body>
</html>