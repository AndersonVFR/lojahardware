<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="projeto final CRUD">
    <meta name="author" content="Anderson Rodrigues">
    <title>Hardwarestore - venda de peças e acessórios para computadores</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>

          <h1 class="text-center">Contato</h1>

          <?php

          session_start();
          include '../model/contato.class.php';
          include '../util/util.class.php';
          include '../dao/contatodao.class.php';

          $u1 = new Util();


            $nome = $_POST['txtnome'];
            $email = $_POST['txtemail'];
            $mensagem = $_POST['txtmensagem'];

            if(empty($nome) || empty($email) || empty($mensagem)){
            echo 'Preencha os campos.';
            }else if(!$u1->testarExpressaoRegular('/^[A-Za-zÀ-Úà-ú ]{2,30}$/',$nome)){
            echo 'Nome fora do padrão';
            }else if(!$u1->validarEmail($email)){
            echo 'E-mail fora de padrão';
            }else{
            $c1 = new Contato();
            $c1->nome = $nome;
            $c1->email = $email;
            $c1->mensagem = $mensagem;

            echo $c1;
            echo "<hr><br>";

          // cadastrar

          $contatoDAO = new ContatoDAO();
          $contatoDAO->cadastrarContato($c1);

            header('location:../view/confirmacaocadastro.html');
          }


          // deletar

          $cDAO = new ContatoDAO();

          $cDAO->deletarContato($_REQUEST['idcontato']);

          header('location:../view/buscarcontatos.php');


          //alterar


          $idcontato = $_REQUEST['idcontato'];

          $query = 'WHERE idcontato = '.$idcontato;

          $cDAO = new ContatoDAO();

          $contatos = array();

          $contatos = $cDAO->buscar($query);

          $_SESSION['contatos']=serialize($contatos);

          header("location:../view/alterarcontato.php");


          //conficar alterarcontato

          $c = new Contato();

          $c->idcontato = $_POST['txtidcontato'];
          $c->nome = $_POST['txtnome'];
          $c->email = $_POST['txtemail'];
          $c->mensagem = $_POST['txtmensagem'];

          $cDAO = new ContatoDAO();

          $cDAO->alterarcontato($c);

          header('location:../view/buscarcontatos.php');

           ?>


  </body>
</html>
