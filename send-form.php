<?php
$name_user=$_POST['Name'];
$email_user=$_POST['Email'];
$message_user=$_POST['Message'];

$to = "alexrosso1025@gmail.com";

$subject = "Consulta desde www.alexrosso.com";

$message="Nombre : ".$name_user."\r\n";
$message.="Email : ".$email_user."\r\n";
$message.="Consulta : ".$message_user."\r\n";

$from= "From: alexander_quintero82142@elpoli.edu.co";

mail($to,$subject,$message,$from);

header("Location:index.php?i=ok");

?>