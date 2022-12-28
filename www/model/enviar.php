<?php
session_start();
require_once './vendor/autoload.php';
//Vai pegar os valores dos inputs
$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phoneNumber'];
$assunto = $_POST['subject'];
$mensagem = $_POST['mensagem'];

$transport = (new Swift_SmtpTransport('smtp.4ucode.com.br', 587))
  ->setUsername('tiago.nogueira@4ucode.com.br')
  ->setPassword('@123Alterar');
$mailer = new Swift_Mailer($transport);
$message = (new Swift_Message('Formulário de contato '))
  ->setFrom(['tiago.nogueira@4ucode.com.br' => 'e'])
  ->setTo(['isaacroque0209@gmail.com'])
  ->setBody("olá");
$result = $mailer->send($message);	
if($result == 1){
//foi enviado com sucesso
	header('Location: ../template/index.php#envio');
}else{
	//teve erro...
	header('Location: ../template/index.php#envio');

}
?>