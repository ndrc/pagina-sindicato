<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sindicato Rural de Itápolis</title>
	<!--<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/anderson.css"/><!--ligação com arquivo CSS-->
	<!--<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/andre.css"/>-->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/style.css"/>
    <script src="lib/jquery/jquery.min.js"></script>
	</head>
  <body>
  
  
      <!-- Cabeçalho -->
  <header class="nav navbar-fixed-top">
        <div class="container-logo">
          <img src="img/logof.png" class="logotipo">
        </div>
        <div class="header-orange"></div>
        <div class="container-fluid">
          <nav class="navbar navbar-right">
            <div class="container">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="oSindicato.html">O Sindicato</a></li>
                <li><a href="cursos.html">Cursos</a></li>
                <li><a href="cotacoes.html">Cotações</a></li>
                <li><a href="galeria.html">Galeria</a></li>
                <li><a href="associese.html">Associe-se</a></li>
               </ul>
               <ul class="nav navbar-nav">
                <form class="navbar-form">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Buscar">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </ul>
            </div>
          </nav>
          </div>
      </header>
      <!-- /cabeçalho -->


    <section class="container containerAssociese">
        <div class="row">
        <div class="col-md-12">
        <h3>Preencha o formulário abaixo que entraremos em contato:</h3>
        <div class="col-md-6">
            <form method="POST" id="frm-mensagem">
            <div class="form-group">
                <label>Nome: </label>
                <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>
            <div class="form-group">
                <label>Email: </label>
                <input type="email" class="form-control" name="email" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label>Telefone: </label>
                <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
                </div>
               <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                <label>Nº Propriedades: </label>
                <input type="number" class="form-control" name="qtdPropriedades">
                </div>
            </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label>Área Total: </label>
                    <input type="text" class="form-control" name="areaPropriedades">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label>Nº Funcionários: </label>
                    <input type="number" class="form-control" name="qtdFuncionarios">
                    </div>
                </div>
            </div> 
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </div>
    </div>
     </div>
    </section>
        

	<!--Rodapé-->
<footer>
 <div class="container">
  <div class="row">
   <div class="col-xs-12 col-sm-6 col-md-3">
	<h1>Menu</h1>
    <nav class="menuRodape">
		<ul class="nav">
			<li class="linksRodape"><a href="cursos.html"><i class="fa fa-angle-right"></i> Cursos</a></span></li>
			<li class="linksRodape"><a href="cotacoes.html"><i class="fa fa-angle-right"></i> Cotações</a></li>
			<li class="linksRodape"><a href="galeria.html"><i class="fa fa-angle-right"></i> Galeria</a></li>
			<li class="linksRodape"><a href="associese.html"><i class="fa fa-angle-right"></i> Associe-se</a></li>
		</ul>
	</nav>
   </div>
   <div class="col-xs-12 col-sm-6 col-md-3">
     <h1>Contato</h1>
    <address>
      <span class="glyphicon glyphicon-map-marker"></span><span> Odilon Negrão, 578<br>Itápolis-SP</span>
    </address>
      <div class="tel">
        <span class="glyphicon glyphicon-earphone"></span><span> (16) 3262-1234</span>
      </div>
      <div class="tel">
        <span><i class="fa fa-fax" aria-hidden="true"></i> (16) 3262-1234</span>
      </div>
   </div>
   <div class="col-xs-12 col-sm-6 col-md-3">
    <h1>Redes Sociais</h1>
    <address> 
      <span><i class="fa fa-envelope-o" aria-hidden="true"></i> sritapolis@uol.com.br</span>
    </address>
      <div class="icones-sociais">
        <p href="#" target="_blank"><i class="fa fa-facebook"></i> srItápolis</p>
        <p href="#" target="_blank"><i class="fa fa-twitter"></i> @srItápolis</p>
        <p href="#" target="_blank"><i class="fa fa-instagram"></i> srItápolis</p>
      </div>
   </div>
   <div class="col-xs-12 col-sm-6 col-md-3">
    <img src="img/logor.jpg">
     </div>
  </div>
 </div>
 <hr>
 <div class="copyright">
 <p>© Zavério&Cristiani</p>
 </div>
</footer>
<!--Rodapé-->


	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>