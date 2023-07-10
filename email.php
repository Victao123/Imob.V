<?php

if(isset($_POST['email'])) && !empty($_POST[email]){

$nome = addslashes($_POST['Nome'])
$email = addslashes($_POST['email'])
$celular = addslashes($_POST['Celular'])
$mensagem = addslashes($_POST['Mensagem'])

$to = "victorhugo.alvespires7@gmail.com";
$subject = "contato - Beto Vidigal";
$body = "Nome: ".$nome. "\r\n".
        "E-mail: ".$email. "\r\n".
        "Celular: ".$celular. "\r\n".
        "Mensagem: ".$mensagem; 
$header = "From:victorhugo.alvespires7@gmail.com"."\r\n".
                ."Reply-To:".$email "\r\n".
                ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else{
    echo("email não pode ser enviado");
}



   }

?>
