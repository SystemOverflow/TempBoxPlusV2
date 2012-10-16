<?php
$sitetitle = "TempboxPlusV2";
$sitehost = "http://localhost/tempboxplusv2/";
$dirupload = "up/"; //cartella dove caricare i file
/////////////////////Database///////////////
$DBhost = "localhost";
$DBuser = "root";
$DBpassword = "abc";
$DBname = "MyDB";
$DBprefix = "New_"; //facoltativo
///////////////////////////////////////////

/////////////////Dati Amministratore///////
$AdminUsr = "Administrator";
$AdminMail = "Admin@email.it";
//////////////////////////////////////////
$estensione_file = array("zip","jpg","pdf","png","exe","rar","iso","mp3"); //estensioni consentite
$limite_download = 100;

$mysqli = new mysqli($DBhost,$DBuser,$DBpassword,$DBname); 
?>