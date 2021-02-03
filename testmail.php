<?php 

include('Class.SMTP.php');
$from="contact@iferu.com";
$smtp = new SMTP('in.mailjet.com', '070034dcfc600c877ea8e8e9cc9ea697', '40205719a176cacdfb59ba1eeafc4389');
$smtp->ContentType='html';
$smtp->ISO='UTF-8';
$smtp->set_from($from, $from, $from);
$smtp->smtp_mail($to,$objet,$message);





?>