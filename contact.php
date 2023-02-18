<?php
if(isset($_POST["contactName"]) && isset($_POST["contactEmail"]) && isset($_POST["contactSubject"]) && isset($_POST["contactMessage"])) {

	$name = htmlspecialchars($_POST["contactName"]);
	$mail = htmlspecialchars($_POST["contactEmail"]);
	$subject = htmlspecialchars($_POST["contactSubject"]);
	$message = htmlspecialchars($_POST["contactMessage"]);
	if(mail("hugo.mathieu771@gmail.com",$subject,"From PEDAWEB, name: ".$name . " - " .$mail. " Message: ".$message)) {
		echo "Message envoyé avec succès !";
	} else {
		echo "Erreur lors de l'envois du Mail.";
	}

}
else {
	echo "Formulaire invalide";
}

echo "</br> Vous allez être redirigés dans quelques secondes ..."
?>
<script>setTimeout(function() { location.href = '/extranet/'; }, 2000);</script>