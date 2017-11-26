<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="libs/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
  <div class="container-fluid" id="pagina"> 
  
  <!--INICIO DO CABECARIO -->
	<?php include 'cabecario_menu.php'; ?>
<!-- FIM CABECARIO -->

	<!-- INICIO DO CONTEUDO -->
	<article class="row">
    	<div class="col-md-10" id="conteudo">
        	<h1>PRÊMIOS</h1>
            
            <div class="media">
              <div class="media-left">     
                 	<img src="img/icone-premio1.png" class="icone"/>
        	  </div>
              <div class="media-body">
                <h2>Diploma de Honra Ao Mérito</h2>
                <p>             
                    “Em comemoração aos 20 do convênio de assistência judiciária à população do Estado de São Paulo e pela excelência dos serviços prestados, o AOB-SP confere a(o)”
                </p>
                <img src="img/certificados/certificado_oab.jpg" class="img-responsive img_certificado" >
 				
              
               	<a href="" class="btn_download_certificado">Download do Certificado</a>
              
              </div>
            </div>
                        
            
           	<div class="media" style="float:left">
              <div class="media-left">     
                 	<img src="img/icone-premio1.png" class="icone" />
        	  </div>
              <div class="media-body">
                <h2>Prémio de Ética Profissional e Fidelidade a Legislação</h2>
                <p> 
                 "A Diretoria do Conselho Regional de Corretores de Imoveis da 2º Região, Atesta para os devidos fins que Elias Gomes Lisboa CREEI N 033562j, teve seu nome registrado no Livro ... por ser inscrito neste conselho há mais de 23 anos e não registrado qualquer mácula em seu portuário, podendo ser considerado um profissional que observa com fidelidade a legislação e o código de Ética profissional, sendo-lhe conferido como homenagem o presente diploma"
                </p>
                 <img src="img/certificados/certificado_conselho_corretores.jpg" class="img-responsive img_certificado" style="width: 36em;
height: 55em;" >
              
                	<a href="" class="btn_download_certificado">Download do Certificado</a>
              
              </div>
            </div>
                        
        
            </div>
            
            </div>
        
        
        </div>
    
    
    </article>
  
  <!-- INICIO DO RODAPE -->
  <?php include 'rodape.php'; ?>
  <!-- FIM DO RODAPE -->
  </div>
  
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="libs/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="libs/js/bootstrap.min.js"></script>
  </body>
</html>