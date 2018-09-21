<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../bootstrap/icon1.png">

    <title>Carousel Template for Bootstrap</title>

    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="../bootstrap/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../bootstrap/assets/js/ie-emulation-modes-warning.js"></script>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link href="../bootstrap/carousel.css" rel="stylesheet">
</head>
<body>

<div class="navbar-wrapper">

    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">

                <div id="navbar" class="navbar-collapse collapse">
                    <div class="col-md-1.9">
                        <a class="navbar-brand" href="#">E-LAWYER</a>
                    </div>
                    <div class="col-md-8">
                        <ul class="nav navbar-nav">
                            <li><a href="../actions_login/home.php">Home</a></li>
                            <li class="active"><a href="../options_home/about_us.php">Sobre nós</a></li>
                            <li><a href="#contact">Fale Conosco</a></li>
                            <!--
                                <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Minha Área <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Meu Perfil</a></li>
                                    <li><a href="#">Meus Casos</a></li>
                                    <li><a href="../login2.php">Sair</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Jurídico</li>
                                    <li><a href="#">Advogados</a></li>
                                </ul>
                                </li>
                            -->
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a>Bem Vindo ao E-LAWYER! <span class="sr-only">(current)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#" data-slide-to="0" class="active"></li>
        <li data-target="#" data-slide-to="1"></li>
        <li data-target="#" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="../bootstrap/direito.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <b><h1 style="font-style: oblique">Conheça nossa ferramenta</h1></b>
                    <b><p style="color: #ffffff; font-style: oblique">Nossa ferramenta irá te proporcionar um melhor
                            acompanhamento dos seus casos jurídicos relacionado ao direito imobiliário do que qualquer
                            outra presente no mercado. Venha fazer parte da nossa comunidade!</p></b>
                    <p><a class="btn btn-lg btn-primary" href="../actions_login/signup.php" role="button">Inscreva-se
                            hoje</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw="
                 alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <b><h1 style="font-style: oblique">OAB</h1></b>
                    <b><p style="color: #ffffff; font-style: oblique">O Conselho Federal da Ordem dos Advogados do
                            Brasil ou Conselho Federal da OAB ou simplesmente OAB é a entidade máxima de representação
                            dos advogados brasileiros e responsável pela regulamentação da advocacia no Brasil.</p></b>
                    <p><a class="btn btn-lg btn-primary" href="https://www.oab.org.br/" target="_blank" role="button">Visitar
                            OAB</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                 alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle"
                 src="https://scontent.fplu4-1.fna.fbcdn.net/v/t1.0-1/p160x160/17796547_1351050921650043_5437890514798799012_n.jpg?_nc_cat=0&oh=f43864567b2b1db0d00dd54ab2f98d4c&oe=5C28F0A3"
                 alt="Generic placeholder image" width="140" height="140">
            <h2>Daniel Santos</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
                cursus magna.</p>
            <p><a class="btn btn-default" href="#" role="button">Mais detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="../bootstrap/201303051406_oab.jpg" alt="Generic placeholder image" width="140"
                 height="140">
            <h2>OAB</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh.</p>
            <p><a class="btn btn-default" href="#" role="button">Mais detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="../bootstrap/CpCz7_KN_400x400.png" alt="Generic placeholder image" width="140"
                 height="140">
            <h2>JusBrasil</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">Mais detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span
                        class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto"
                 alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto"
                 alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto"
                 alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../bootstrap/assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
