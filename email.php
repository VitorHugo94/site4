<?php

if(isset($_POST['email']) && !empty($_POST['email'])){



$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "vhbrizante@hotmail.com";
$subjet = "Contato site 2";
$body = "Nome: ".$nome. "\r\n".
        "email: ".$email."\r\n".
        "Mensagem: ".$mensagem;
$header = "From:vitorhugobrizante@gmail.com"."\r\n"."Reply-to:".$email."\r\n"."X=mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");


}else{
    echo("O Email não pode ser enviado");
}


}

?>