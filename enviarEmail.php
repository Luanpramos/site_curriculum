<?php
$para = "luanpr@id.uff.br";
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = "Nome :" . $nome . "\r\n Email: " . $email . " \r\n Assunto: " . $assunto . " \r\n Mensagem: " . $mensagem;
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: luanpr@ymail.com" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
if ((isset($nome))and(isset($email))and(isset($assunto))){
    mail($para,$assunto,$mensagem,$headers);
    header("location: index.html");
}
else
    echo"Erro!";
?>