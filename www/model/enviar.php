<?php


$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$subject = $_POST['subject'];
$msg = $_POST['mensagem'];


$headers = "From: ". $name;

$corpoemail = '<b>Fale Conosco - 4uCode</b>
			
			   Nome: '   .$name.' /n
			   Email:'   .$email.'/n
			   Telefone:' .$phoneNumber.'/n
			   Assunto:' .$subject.' /n
			   Mensagem:'.$msg.' /n';




if(mail("athauan.marques@gmail.com", "Fale Conosco",$corpoemail,$headers)){


 	   echo "<script>alert('Mensagem enviada com sucesso!');</script>";	
 	   header("Location: index.php");

} else{

      echo "<script>alert('Erro ao enviar, tente diretamente pelo email athauan.marques@gmail.com');</script>";	

}