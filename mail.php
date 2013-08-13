<?php

function email($email, $name, $file, $password){
	$name = explode(" ", $name);

	//EMail
	$msg = "Sehr geehrter Herr ".$name[count($name)-1]."\n";
	$msg .= "\n";
	$msg .= "Vielen Dank für Ihr Verständnis. Folgend Ihr gewünschter Downloadlink:\n";
	$msg .= "\n";
	$msg .= "EXL: http://".$_SERVER['SERVER_NAME']."/download.php?pass=$password&$file=exl\n";
	$msg .= "\n";
	$msg .= "Anbei auch die anderen Downloads zu dem Produkt $file.\n";
	$msg .= "\n";
	$msg .= "Infobrochure: http://".$_SERVER['SERVER_NAME']."/brochure_$file.pdf\n";
	$msg .= "Sicherheitshinweise: http://".$_SERVER['SERVER_NAME']."/sicherheit_$file.pdf\n";
	$msg .= "Montageanleitung: http://".$_SERVER['SERVER_NAME']."/montage_$file.pdf\n";
	$msg .= "\n";
	$msg .= "Falls Sie zu einem späteren Zeitpunkt noch geschützte Dateien zu einem anderen Produkt herunterladen möchen, dann können Sie folgendes Passwort benutzen.\n";
	$msg .= "\n";
	$msg .= "Passwort: $password\n";
	$msg .= "\n";
	$msg .= "Mit freundlichen Grüßen\n";
	$msg .= "Ihre Korona Serveranlage\n";

	$headers   = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/plain; charset=utf-8";//charset=iso-8859-1";
	$headers[] = "From: benni@kobrakai.de";
	$headers[] = "Reply-To: benni@kobrakai.de";

	mail($email, "Download von $file", $msg, implode("\r\n",$headers));
	return true;
}
//Sanitise and Validate
  if(isset($_POST['d-submit'])){
		if($_POST['d-name'] != "" && $_POST['d-email'] != "" && $_POST['d-telephone'] != "" && $_POST['d-company'] != "" && $_POST['d-file'] != ""){

			//Text
			$name = filter_var($_POST['d-name'], FILTER_SANITIZE_STRING);
			$company = filter_var($_POST['d-company'], FILTER_SANITIZE_STRING);
			$street = filter_var($_POST['d-street'], FILTER_SANITIZE_STRING);
			$city = filter_var($_POST['d-city'], FILTER_SANITIZE_STRING);
			$file = filter_var($_POST['d-file'], FILTER_SANITIZE_STRING);

			//Email, Nummer
			$email = filter_var($_POST['d-email'], FILTER_SANITIZE_EMAIL);
			$telephone = filter_var($_POST['d-telephone'], FILTER_SANITIZE_NUMBER_INT);

			//Checkbox
			$department = 0;

			if($name == "" || $company == "" || $file == "") die("Text nicht akzeptiert");
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) die("Email");
			if($telephone == "") die("telephone");
			$password = "543Korona21";


			if(email($email, $name, $file, $password)) header("Location: ".$_SERVER["HTTP_REFERER"]);

		}elseif($_POST['d-password'] != "" && $_POST['d-file'] != ""){
			$password = filter_var($_POST['d-password'], FILTER_SANITIZE_STRING);
			$file = filter_var($_POST['d-file'], FILTER_SANITIZE_STRING);
			if($password === "543Korona21"){
				$name = "Benjamin Milde";
				$email = "benni@kobrakai.de";
				if(email($email, $name, $file, $password)) header("Location: ".$_SERVER["HTTP_REFERER"]);
			}
		}else{
			die("Irgendwas fehlt oder ist leer!");
		}
	}

//header("Location: ".$_SERVER["HTTP_REFERER"]);

?>