<?php

$xml_object = simplexml_load_file('../database/contas/contas.xml') or die("Error: Cannot create object");


foreach($xml_object as $users){	
$achou = True;
    if($users['email'] == $_POST['email'] and $users['senha'] == $_POST['senha']){
       break;
    } else {
		$achou = False;	
		}
}

	if ($achou == True){
		 echo json_encode(array('success' => "1"));
    } else {
		echo json_encode(array('success' => "0"));
	}
?>