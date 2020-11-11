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
    <!--Slide Show Css -->
    <link href="ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
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
                <a class="navbar-brand" href="#"><strong>Hardware</strong> Shop</a>
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
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>

                            <li><a href="#">
                                <img src="ItemSlider/images/1.jpg" alt="img01"><h4>Intel</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="ItemSlider/images/2.jpg" alt="img02"><h4>AMD</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="ItemSlider/images/5.jpg" alt="img05"><h4>Kingston</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="ItemSlider/images/6.jpg" alt="img06"><h4>Corsair</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="ItemSlider/images/7.jpg" alt="img07"><h4>Crucial</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="ItemSlider/images/9.jpg" alt="img09"><h4>Razer</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="ItemSlider/images/10.jpg" alt="img10"><h4>Red Dragon</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="ItemSlider/images/11.jpg" alt="img11"><h4>Multilaser</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="ItemSlider/images/12.jpg" alt="img12"><h4>Gabinetes</h4>
                            </a></li>
                        </ul>
                        <nav>
                            <a href="#">Processadores</a>
                            <a href="#">Memórias</a>
                            <a href="#">Periféricos</a>
                            <a href="#">Outros</a>
                        </nav>
                    </div>

                </div>
                <br />
            </div>
        </div>
        <!-- /.row -->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong>? </strong>items</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                Ordernar Produtos &nbsp;
      <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">By Price Low</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Price High</a></li>
                                <li class="divider"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="img/dummyimg.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="#">PC completo </a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p><a href="#">Ptional dismiss button </a></p>
                                <p> </p>
                                <p><a href="#" class="btn btn-success" role="button">Add pro carrinho</a> <a href="#" class="btn btn-primary" role="button">Ver Detalhes</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="img/dummyimg.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="#">PC completo</a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p><a href="#">Ptional dismiss button </a></p>
                                <p>Ptional dismiss button in tional dismiss button in   </p>
                                <p><a href="#" class="btn btn-success" role="button">Add pro carrinho</a> <a href="#" class="btn btn-primary" role="button">Ver Detalhes</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="img/dummyimg.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="#">PC completo</a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p><a href="#">Ptional dismiss button </a></p>
                                <p>Ptional dismiss button in tional dismiss button in   </p>
                                <p><a href="#" class="btn btn-success" role="button">Add carrinho</a> <a href="#" class="btn btn-primary" role="button">Ver Detalhes</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="img/dummyimg.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="#">PC completo</a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p><a href="#">Ptional dismiss button </a></p>
                                <p>Ptional dismiss button in tional dismiss button in   </p>
                                <p><a href="#" class="btn btn-success" role="button">Add pro carrinho</a> <a href="#" class="btn btn-primary" role="button">Ver Detalhes</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="img/dummyimg.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="#">PC completo</a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p><a href="#">Ptional dismiss button </a></p>
                                <p>Ptional dismiss button in tional dismiss button in   </p>
                                <p><a href="#" class="btn btn-success" role="button">Add pro carrinho</a> <a href="#" class="btn btn-primary" role="button">Ver Detalhes</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="img/dummyimg.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="#">PC completo</a></h3>
                                <p>Price : <strong>$ 3,45,900</strong>  </p>
                                <p><a href="#">Ptional dismiss button </a></p>
                                <p>Ptional dismiss button in tional dismiss button in   </p>
                                <p><a href="#" class="btn btn-success" role="button">Add pro carrinho</a> <a href="#" class="btn btn-primary" role="button">Ver Detalhes</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <ul class="pagination alg-right-pad">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /.row -->
                <!-- /.div -->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong>?  </strong>items</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Ordenar Produtos &nbsp;
      <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">By Price Low</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Price High</a></li>
                                <li class="divider"></li>
                            </ul>
                        </div>
                    </div>
                </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

    <!--Footer -->
    <div class="col-md-12 footer-box">

      <section class="contato" id="contato">
        <div class="row">
            <div class="col-md-4">
                <strong>Deixe um feedback</strong>
                <hr>
                <form action="controller/contato.controller.php" method="post" name="form01">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                              <label for="txtnome">
                                Nome:
                              </label>
                                <input type="text" name="txtnome"class="form-control" required="required" placeholder="Nome">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                              <label for="txtemail">
                                E-mail:
                              </label>
                                <input type="email" name="txtemail" class="form-control" required="required" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                              <label for="txtmensagem">
                                Mensagem:
                              </label>
                                <textarea name="txtmensagem" id="txtmensagem" required="required" class="form-control" rows="3" placeholder="Menssagem"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>



            <div class="col-md-4 social-box">
                <strong>Siga a gente nas redes sociais! </strong>
                <hr>
                <a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
                <p>
                    Seguindo a gente, vocês não irão perder nenhuma promoção feita pela nossa loja.
                </p>
            </div>
        </div>
        <hr>
    </div>
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2020 | &nbsp; All Rights Reserved | &nbsp; hardwarestore.com | &nbsp; Email: hardwarestore@gmail.com
    </div>
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="ItemSlider/js/jquery.catslider.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
		</script>
</body>
</html>
