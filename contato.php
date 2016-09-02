
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Contatos</title>

   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <
  </head>

  <body style="padding-top: 30px">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/curso1/index.php">Home</a></li>
            <li><a href="/curso1/contato.php">Contato</a></li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <div class="page-header">
        <h1>Contato</h1>
      </div>

      <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Formulário de Contato</h3>
          </div>
          <div class="panel-body">

          <form name="cadastroContato" method="POST" action="negocio/contato.php">

          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
          </div>

          <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <input type="text" class="form-control" id="mensagem" placeholder="Mensagem" name="mensagem">
          </div>

          <label for="assunto">Assunto</label>
          
          <div class="form-group">                         
          <textarea for="assunto" placeholder="Diga qual o assunto?"></textarea>
          </div>

          <button type="submit" class="btn btn-default">Enviar</button>

           </form>

          </div>
      </div>
    </div> 
   
  </body>
</html>
