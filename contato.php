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

            <section id="contato">
                               <h1> Contato</h1>
                               <div class="col-md-6">
                                  
                                   <h2>  Nossos Telefones </h2>
                                   <br>
                                            (11)<span> 4194-3465</span>
                                             <span class="glyphicon glyphicon-earphone"></span>
                                            <br/><br/>
                                             (11)
                                             <span> 99438-5012</span> 
                                             <img src="img/icon_whatsApp.jpg" class="icone" style="height: 2.2em;
margin-left: 1em;
vertical-align: baseline;" />
                                            
                                            
                                  <br><br>
                                   <h1>Estamos Em Horário de Funcionamento! </h1>
                                   
                               </div>
                               <div class="col-md-6" style="text-align:left;">
                                   <h2>Nosso E-mail:</h2>
                                   <a href="mailto:eliaslisboa@aasp.org.br">eliaslisboa@aasp.org.br</a>
                                    <span class="glyphicon glyphicon-envelope" style="font-size: 2em;margin-left: 0.5em;
vertical-align: baseline;height: initial;"></span>
                                   <br><br>
                                   <form action="#" id="form_contato">
                                       <p>Envie e-mail através do formulário abaixo:</p>
                                      <div class="input-group">
                                          
                                             
                                          
                                          <input class="form-control" placeholder="*Seu nome" name="nome" required type="text">
                                        </div>
                                       <br>
                      
                                       <div class="input-group">
                                          
                                             
                                          
                                          <input class="form-control" name="telefone" placeholder="*Telefone:" required type="tel">
                                        </div>
                                        <br>
                                       <div class="input-group">
                                          
                                             
                                          
                                          <input class="form-control" name="email_remetente" placeholder="*Seu E-mail: " required type="email">
                                        </div>
                                      
                                       
                                       <br>
                                       <div class="input-group">
                                          
                                             
                                          
                                          <textarea class="form-control" placeholder="*Mensagem: " name="mensagem" required></textarea>
                                        </div>
                                      
                                       
                                       <br>
                                       <input value="Enviar" class="btn btn-default" id="enviar_email" type="submit">
                                   </form>
                                   <div class="collapse" id="collapseExample">
                                  <div class="well">
                                    Enviado com Sucesso. <br>Em até 2 dias úteis,<br>estaremos retornando o contato  : )
                                  </div>
                                </div>
                                   <span id="final_contato"></span>
                               </div>
                               
                           </section>
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