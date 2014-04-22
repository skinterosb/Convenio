<?php
	include_once '../Clases/zulu.php';
	$zulu = new zulu("127.0.0.1","root","","convenio");
	
	echo json_encode($zulu->filtrarZulu($_GET['term']));
	
?>