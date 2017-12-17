<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>Advogado Elias Liboas Gomes - Contato</title>

    <!-- Bootstrap -->
    <link href="libs/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" type="text/css" href="css/style.css">


  <meta name="description" content="Entre em contato com advogado Elias Lisboa. Atendo Barueri, Osasco, Carapicuiba, Jandira e Itapevi" >  	
  
      <?php
		include "meta_cabecario.php";
	?>

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
                                   <a href="mailto:eliaslisboa@aasp.org.br">eliaslisba@adv.oabsp.org.br</a>
                                    <span class="glyphicon glyphicon-envelope" style="font-size: 2em;margin-left: 0.5em;
vertical-align: baseline;height: initial;"></span>
                                   <br><br>
                                   <form action="." id="form_contato" onSubmit="return false;">
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
                                          
                                             
                                          
                                          <input class="form-control" name="email" placeholder="*Seu E-mail: " required type="email">
                                        </div>
                                      
                                       
                                       <br>
                                       <div class="input-group">
                                          
                                             
                                          
                                          <textarea class="form-control" placeholder="*Mensagem: " name="mensagem" required></textarea>
                                        </div>
                                      
                                       
                                       <br>
                                       <input value="Enviar" class="btn btn-default" id="enviar_email" type="submit">
                                   </form>
                                   <div class="collapse" id="collapseExample">
                                  <div class="well enviado_sucesso">
                                    Enviado com Sucesso. <br>Em até 2 dias úteis,<br>estaremos retornando o contato  : )
                                  </div>
                                </div>
                                   <span id="final_contato"></span>
                               </div>
                               
                           </section>
                           
                     
 		</div>
    
  
    </article>
    <!-- COMEÇO DO MAPA -->
          <div class="row" id="div_mapa" >
            <div class="col-md-10" style="height: 80%; text-align:center;margin-left: 1.5em;" >
                <h2>
                    Nosso Endereço
                </h2>
                <p>
                	Avenida Zélia N.189
                	<br/>
	                Parque dos Camargos - Barueri - São Paulo
                
                </p>
                    <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1494.200453093229!2d-46.89083584557589!3d-23.53384420001288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf014500b8f995%3A0xd117829f9c30c3d4!2sAv.+Z%C3%A9lia%2C+189+-+Parque+dos+Camargos%2C+Barueri+-+SP!5e0!3m2!1spt-BR!2sbr!4v1512744894829" 
                    style="width:100%;height: 19em;"
                     frameborder="0"  class="img-responsive" allowfullscreen></iframe>
                
            </div>
        </div>
      <!--FIM DO MAPA -->
        
  <!-- INICIO DO RODAPE -->
  <?php include 'rodape.php'; ?>
  <!-- FIM DO RODAPE -->
  </div>
  
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="libs/js/jquery.min.js"></script>
        <script type="text/javascript">
	
	 $('#form_contato').submit(function(){
		//alert("");
			var dados = $(this).serialize();
			//var url_atual = window.location.href;
			$.ajax({
					type: "POST",
					url: "php/envio_email.php",
					data: dados,
					success: function () {
						//alert(data);
						// $("#collapseExample").show();
						
					}
				});
			alert("Enviado com sucesso");
        return false;

    });
    
	</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="libs/js/bootstrap.min.js"></script>
  </body>
</html>