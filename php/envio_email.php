<?php

$nomePessoa = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
//$arquivo = $_POST['mensagem'];

if (isset($_POST['mensagem'])) {
    $mensagem = $_POST['mensagem'];
}else{
    $mensagem = "";
}
/**/


// emails para quem será enviado o formulário
    //$emailenviar = $_POST['email_destino'];
    //$emailenviar = "eliaslisba@adv.oabsp.org.br";
	$emailenviar = "claudio.ramosti@yahoo.com.br";
    $destino = $emailenviar;
    $assunto = "Site Elias Lisboa - Pessoa Entrou em Contato";
    $arquivo .= "<meta charset='UTF-8'>";
    
  	$arquivo .= "<center> <b>Contato pelo Site Elias Lisboa</b> </center>";
	$arquivo .= "<br>";
	$arquivo .= "Nova mensagem enviada pelo formulário de contato do site Elias Lisboa.";
  	$arquivo .= "<br><br>";
	$arquivo .= "<b>Contato</b>";
	$arquivo .= "<br>";
	$arquivo .= "Nome: $nomePessoa <br>";
	$arquivo .= "Telefone: $telefone <br>";
	$arquivo .= "Email: $email <br>";
	$arquivo .= "Mensagem: $mensagem <br>";
	
    // É necessário indicar que o formato do e-mail é html
   $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: Contato Pelo Site <$email>';
    //$headers .= "Bcc: $EmailPadrao\r\n";
     //Windows 
     /*
    $headers = "MIME-Version: 1.1\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "To: claudio@saotech.com.br\r\n";
    $headers .= "From: claudio@saotech.com.br\r\n"; */
    //// remetente
    //$headers .= "Return-Path: claudio@localhost\r\n"; // return-path

    $enviaremail = mail($destino, $assunto, $arquivo, $headers);
    if($enviaremail){
		$mgm = "E-MAIL ENVIADO COM SUCESSO! <br>";
		
    } else {
    	$mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "";
    }
echo $mgm;

?>