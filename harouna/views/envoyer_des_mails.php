<?php
 
if(isset($_POST['mailform']))
{
	$mail_dest=$_POST['maildest'];
 $test_mail=$_POST['mailtest'];


$header="MIME-Version: 1.0\r\n";
$header.='From:"STE"<support@Ste.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		

	</body>
</html>
';


mail($mail_dest, "Votre Compte a été activé", $test_mail, $header);
}

?>




