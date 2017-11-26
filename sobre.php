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
        	<h1>SOBRE MIM</h1>
        
        	<p>
            	Lorem ipsum dui rutrum egestas tempor lorem imperdiet himenaeos bibendum lacus dictumst, pharetra augue netus placerat hac orci suscipit nostra malesuada eleifend, nisl aliquam conubia ut taciti class eleifend quam convallis ultricies. ac blandit luctus litora primis venenatis condimentum torquent, aliquet nunc in tincidunt tempus rhoncus nisl neque, taciti senectus cras elementum imperdiet sollicitudin. quis tortor convallis blandit urna odio torquent sociosqu porta aliquet duis nam, curabitur vestibulum sagittis metus nibh quisque massa turpis congue dolor aliquam, vivamus amet turpis nibh neque semper nec vel convallis fringilla. ultrices rhoncus luctus nisl mollis netus molestie, diam facilisis velit ultrices curabitur ante sed, quisque rutrum metus duis congue. 

            </p>
            
            <p>
            Bibendum nec nam molestie faucibus volutpat consequat, semper venenatis vivamus fames fringilla tortor, cubilia auctor in quis himenaeos. leo porttitor donec nisl volutpat convallis sem ut curabitur sit, cras sed aliquam etiam curae lectus convallis neque elit, primis erat in id praesent curabitur pulvinar ullamcorper. donec dictumst placerat vivamus dolor consectetur aliquam aliquet, cubilia fermentum luctus feugiat etiam sodales mollis euismod, rhoncus semper sit a metus gravida. habitant vel senectus aliquet donec metus arcu maecenas pulvinar eleifend porta est pellentesque dictumst commodo, potenti aliquam ut elementum sit non diam mauris porttitor dapibus feugiat ipsum. 
            
            </p>

        	<h2>Formação</h2>
            <div id="pg_sobre_formacao" class="container-fluid" >
            	<div class="row" class="item_formacao">
                	<div class="col-md-6">
                    	<div style="width:20%;float:left">
                        	<img src="img/diploma-certificado.jpg" class="img-responsive" >
                        </div>
                    	<div class="texto_certificado">
                        	<h3>Bachael em Direito</h3>
                            <p>Instituição: Faculdades Metropolitanas Unidas - FMU</p>
                            <p>Duração: 5 anos </p>
                        </div>
                    </div>
                <div class="col-md-6">
                    	<div style="width:20%;float:left">
                        	<img src="img/diploma-certificado.jpg" class="img-responsive" >
                        </div>
                    	<div class="texto_certificado">
                        	<h3>Especialização em Processo Civil</h3>
                             <p>Instituição: Faculdades Metropolitanas Unidas - FMU</p>
                            <p>Duração: 2 anos </p>
                        </div>
                    </div>
                </div>
                      
                <div class="row">
                	<div class="col-md-6">
                    	<div style="width:20%;float:left">
                        	<img src="img/diploma-certificado.jpg" class="img-responsive" >
                        </div>
                    	<div class="texto_certificado">
                        	<h3>Especialização em Direto Imobiliario</h3>
                           <p>Instituição: Faculdades Metropolitanas Unidas - FMU</p>
                            <p>Duração: 2 anos </p>
                        </div>
                    </div>
                
                </div>
            
            </div>
       
            <h2>Atuação</h2>
            
            <p>
            Lorem ipsum curae tellus rutrum maecenas aenean faucibus, dictumst placerat viverra mauris cubilia etiam risus, malesuada donec adipiscing porta aenean fringilla. 
            ligula ipsum lectus sociosqu proin turpis sollicitudin gravida vel rhoncus, donec netus porttitor bibendum phasellus interdum euismod torquent quis, etiam odio etiam sociosqu suscipit augue tempus duis. 
            enim massa sem eu aliquet sagittis sollicitudin viverra faucibus ante dictum, egestas tempus blandit diam eros rutrum curabitur varius elit egestas, diam ut tempus magna sem phasellus fermentum inceptos rhoncus. 
            fames neque quisque faucibus id integer augue enim, auctor leo lacinia feugiat diam integer est ad, ullamcorper lorem orci donec libero a. 
            </p>
            
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