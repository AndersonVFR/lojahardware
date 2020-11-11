<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="projeto final CRUD">
    <meta name="author" content="Anderson Rodrigues">
    <title>Hardwarestore - venda de peças e acessórios para computadores</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- custom CSS here -->
    <link href="../css/style.css" rel="stylesheet" />
    <script type="../text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="../text/javascript" src="../js/jquery-3.1.1.min.js"></script>
  </head>

  <body>


    <main>
      <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php"><strong>Hardware</strong> Shop</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Cadastro</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contato <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><strong>Telefone: </strong>51 9 0000-0000</a></li>
                                <li><a href="#"><strong>Email: </strong>Lojablablabla@gmail.com</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><strong>Endereço: </strong>
                                    <div>
                                        Rua: aleatoria, N° 123, Bairro: Qualquer um,<br />
                                        RS, Brasil
                                    </div>
                                </a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" placeholder="Digite o nome do produto" class="form-control">
                        </div>
                        &nbsp;
                        <button type="submit" class="btn btn-primary">Procurar</button>
                    </form>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
      </header>

      <section class="home container-fluid" id="home">

            <h1 class="text-center"> Contatos Cadastrados </h1>

            <?php
              include '../dao/contatodao.class.php';
              include '../model/contato.class.php';


              $contatoDAO = new ContatoDAO();

              $contatos = $contatoDAO->buscarcontatos();

             ?>

             <table class="table table-striped table-hover">
               <thead>
                 <tr>
                   <th>Código</th>
                   <th>Nome</th>
                   <th>E-mail</th>
                   <th>Mensagem</th>
                   <th>Editar/Excluir</th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                    foreach ($contatos as $c) {
                      echo "<tr>";
                      echo "<td>".$c->idcontato."</td>";
                      echo "<td>".$c->nome."</td>";
                      echo "<td>".$c->email."</td>";
                      echo "<td>".$c->mensagem."</td>";
                      echo "<td>
<a href='../controller/contato.controller.php''><img src='../img/edita.png' alt='Icone Edição'></a>&nbsp;&nbsp;
<a href='../controller/contato.controller.php?op=alterar&idcontato=$c->idcontato'>
                                <img src='../img/apagar.png' alt='Icone Excluir'>
                              </a>
                            </td>";
                      echo "</tr>";
                    }

                  ?>
               </tbody>
               <tfoot>
               </tfoot>
             </table>

          </section>

        </main>
      </body>
    </html>
