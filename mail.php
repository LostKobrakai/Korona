<?php
//Sanitise and Validate
  if(isset($_POST['d-submit'])){
		if($_POST['d-name'] != "" && $_POST['d-email'] != "" && $_POST['d-telephone'] != "" && $_POST['d-company'] != "" && $_POST['d-street'] != "" && $_POST['d-city'] != "" && $_POST['d-file'] != ""){

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

			if($name == "" || $street == "" || $company == "" || $city == "" || $file == "") die("Text nicht akzeptiert");
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) die("Email");
			if($telephone == "") die("telephone");

			$name = explode(" ", $name);

			$password = "543Korona21";

			//EMail
			$msg = "Sehr geehrter Herr ".$name[count($name)-1]."\n";
			$msg .= "\n";
			$msg .= "Vielen Dank für ihr Verständnis. Folgend der Link zu ihrem Download.\n";
			$msg .= "http://".$_SERVER['SERVER_NAME']."/download.php?pass=$password\n";
			$msg .= "\n";
			$msg .= "Falls sie zu einem späteren Zeitpunkt noch weiter geschützte Dateien herunterladen möchen, dann können sie folgendes Passwort benutzen.\n";
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

		}else{
			die("Irgendwas fehlt oder ist leer!");
		}
	}

header("Location: ".$_SERVER["HTTP_REFERER"]);

?>