<?php
$url_atual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$param = explode("/",$url_atual);
$pagina = $param[4];

$isIndex = false;
$isSobre = false;
$isServicos= false;
$isPremios= false;
$isContato = false;


switch ($pagina) {
	
	case "index.php":
		$isIndex = true;
		break;	
	case "sobre.php":
		$isSobre = true;
		break;	
		
		case "servicos.php":
		$isServicos = true;
		break;	
		
		case "premios.php":
		$isPremios = true;
		break;	
		
		case "contato.php":
		$isContato = true;
		break;	
		
		default:
		$isIndex = true;
		break;
	
}



?>
  <header class="row">
    <div class="col-md-2 col-xs-2" id="div_imagem"> <img src="img/balanca.jpg" class="img-responsive"/> </div>
    <div class="col-md-10" id="div_titulo_menu">
      <div class="col-md-12 container-fluid">
        <div class="row col-md-12" id="div_titulo">
          <h1>Elias Lisboa</h1>
          <h2>Advogado</h2>
        </div>
      </div>
      <div class="row col-md-12" id="div_menu">
        <ul class="nav nav-pills" id="menu_principal" data-toggle="collapse" data-target="#bar1">
          <li role="presentation" class="<?php if ($isIndex == true) echo "active"; ?>" ><a href="index.php">Pagina Inicial</a></li>
          <li role="presentation" class="<?php if ($isSobre == true) echo "active"; ?>"><a href="sobre.php">Sobre</a></li>
          <li role="presentation" class="<?php if ($isServicos == true) echo "active"; ?>"><a href="servicos.php">Serviços</a></li>
          <li role="presentation" class="<?php if ($isPremios == true) echo "active"; ?>"><a href="premios.php">Prêmios</a></li>
          <li role="presentation" class="<?php if ($isContato == true) echo "active"; ?>"><a href="contato.php">Contato</a></li>
        </ul>
      </div>
    </div>
  </header>