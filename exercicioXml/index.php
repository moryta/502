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

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">

        <div class="input-group">
          <form name="criar" method="post" action="php/adicionar.php">
            <input type="text" class="form-control" name="nome" id="nome"  placeholder="Nome">
            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
            <button type="submit" class="btn btn-default">Salvar</button>
          </form>
        </div>

        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">Listagem</div>

          <!-- Table -->
          <table class="table">
            <tr>
              <th>ID</th>
              <th>NOME</th>
              <th>E-MAIL</th>
              <th>TELEFONE</th>
              <th>EDITAR</th>
              <th>EXCLUIR</th>
            </tr>
            <?php
            $i = 0;
            $obj = new SimpleXMLElement('php/listagem.xml', null, true);
            //echo "<pre>";
            $table = '';
            foreach ($obj->aluno as $aluno) {
                $table .= '<tr>';
                $table .= '<td>';
                  $table .= $aluno->id;
                $table .= '</td>';
                  $table .= '<td>';
                    $table .= $aluno->nome;
                  $table .= '</td>';
                  $table .= '<td>';
                    $table .= $aluno->email;
                  $table .= '</td>';
                  $table .= '<td>';
                    $table .= $aluno->telefone;
                  $table .= '</td>';
                  $table .= '<td>';
                    $table .= '<a href="alterar.php?id='.$aluno->id.'&i='.$i.'">Editar</a>';
                  $table .= '</td>';
                  $table .= '<td>';
                    $table .= '<a href="php/excluir.php?i='.$i.'">Excluir</a>';
                  $table .= '</td>';
                $table .= '</tr>';
                $i++;
            }

            echo $table;
             ?>
          </table>
        </div>

      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="jquery.min.js"><\/script>')</script>
    <script src="bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
