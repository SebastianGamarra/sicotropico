<?php
 if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
	$email = $_POST['email'];
	$query = $_POST['message'];
	$email_from = $name.'<'.$email.'>';

 $to="stgamarra5@gmail.com";
 $subject="Nuevo mensaje de elhuerto.co";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 Nombre:
		 $name 	   
         <br>
         Celular:
		 $phone
         <br>
 		 Email:
		 $email
         <br>
 		 Mensaje:
		 $query
      
   ";
     
	if(mail($to,$subject,$message,$headers))
		header("Location:../contacto.php?msg=El mensaje ha sido enviado, gracias por contactarnos.");
	else
		header("Location:../contacto.php?msg=Error al enviar el e-mail !");
		//contact:info@elhuerto.co
 }
?>
