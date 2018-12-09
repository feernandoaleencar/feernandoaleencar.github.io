<?php

	$para = "contato@fernandoalencar.com";
	$inf = "Contato pelo Portfolio";
    $name = $_REQUEST['contactName'];
    $email = $_REQUEST['contactEmail'];
    $assunto = $_REQUEST['contactSubject'];
    $msg = $_REQUEST['contactMessage'];

    	$corpo = "<strong>Mensagem de Contato</strong><br><br>";
    	$corpo = "<strong> contactName: </strong> $name";
    	$corpo = "<br><strong> contactEmail: </strong> $email";
    	$corpo = "<br><strong> contactSubject: </strong> $assunto";
    	$corpo = "<br><strong> contactMessage: </strong> $msg";

    echo $name."<br>";
    echo $email."<br>";
    echo $assunto."<br>";
    echo $msg;

?>