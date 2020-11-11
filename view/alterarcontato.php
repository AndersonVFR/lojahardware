<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <main>
      <header id="topo" class="jumbotron text-center" style="margin-bottom:0">
        <h1>Alterar contato</h1>
      </header>

      <nav class="navbar navbar-inverse" style="margin-bottom: 0; border-radius: 0;">
        <ul class="nav navbar-nav">
          <li><a href="../index.php">Home</a></li>
          <li><a href="buscarcontatos.php">Visualizar Contatos</a></li>
        </ul>
      </nav>

      <section class="home container-fluid" id="home">

        <h1 class="text-center"> Alterando Contato </h1>
        <!--fazendo o uso da SESSION - pegando o resultado da busca anterior: -->
        <?php
            include('../model/contato.class.php');

            $c = array();

         ?>
        <form action="../controller/contato.controller.php?op=confirmaralteracao" method="post" name="form01">
          <div class="form-group">
            <label for="txtidcontato">
              Código:
            </label>
            <input type="text" name="txtidcontato" class="form-control" value="<?php echo $c[0]->idcontato ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label for="txtnome">
              Nome:
            </label>
            <input type="text" name="txtnome" class="form-control" value="<?php echo $c[0]->nome ?>">
          </div>
          <div class="form-group">
            <label for="txtemail">
              E-mail:
            </label>
            <input type="email" name="txtemail" class="form-control" value="<?php echo $c[0]->email ?>">
          </div>
          <div class="form-group">
            <label for="txtmensagem">
              Mensagem:
            </label>
            <textarea name="txtmensagem" rows="6" cols="30" class="form-control"><?php echo $c[0]->mensagem ?></textarea>
          </div>

          <input type="reset" name="limpa" value="Limpar" class="btn btn-primary">
          <input type="submit" name="altera" value="Alterar" class="btn btn-primary">
        </form>

      </section>
    </main>
  </body>
</html>
