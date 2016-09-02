<?php require_once('db/config/database.php'); ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Listar Usuários</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>Usuários</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Endereço de Email</th>
                      <th>Status</th>
                      <th>Ação</th>
                    </tr>
                  </thead>
                  <tbody> 
                      <?php
                        $sql = "SELECT * FROM usuario ORDER BY nome ASC";

                        foreach ($conn->query($sql) as $row) {
                          echo '<tr>';
                          echo '<td>'. $row['nome'] . '</td>';
                          echo '<td>'. $row['email'] . '</td>';
                          
                          if($row['ativo'] == true){

                            echo '<td>'. "Ativo" . '</td>';               

                        }else{

                        echo '<td>'. "Inativo" . '</td>';

                        }
                        echo '<td>';

                        echo '<a class="btn btn-info" href="/curso1/index.php">Editar</a>';
                        echo '<a class="btn btn-danger" href="/curso1/index.php">Excluir</a>';
                         
                        echo '</td>';
                          
                        echo '</tr>';
                        }

                      ?>

                  </tbody>
            </table>
        </div>
    </div>
  </body>
</html>