<?php
$feedbackHasError = false;
$feedbackErrors = array();
$feedbackSubmitedFromModal = false;

if(isset($_POST["submitFeedback"]) || isset($_POST["submitFeedbackModal"]))
{
	if(isset($_POST["submitFeedbackModal"]))
	{
		$feedbackSubmitedFromModal = true;
	}

	$feedbackName = $_POST["feedbackName"];
	$feedbackEmail = $_POST["feedbackEmail"];
	$feedbackSubject = $_POST["feedbackSubject"];
	$feedbackMessage = $_POST["feedbackMessage"];
		
	if(strlen($feedbackName) == 0)
	{
		$feedbackErrors["feedbackName"] = "Champ requis";
	}
		
	if(strlen($feedbackEmail) == 0)
	{
		$feedbackErrors["feedbackEmail"] = "Champ requis";
	}
	elseif(!filter_var($feedbackEmail, FILTER_VALIDATE_EMAIL))
	{
		$feedbackErrors["feedbackEmail"] = "Cet email ne semble pas valide";
	}
		
	if(strlen($feedbackSubject) == 0)
	{
		$feedbackErrors["feedbackSubject"] = "Champ requis";
	}
		
	if(strlen($feedbackMessage) == 0)
	{
		$feedbackErrors["feedbackMessage"] = "Champ requis";
	}
		
	$feedbackHasError = count($feedbackErrors) > 0;
		
	if(!$feedbackHasError)
	{
		// Send mail
		$to      = $emailFeedback;
		$subject = stripslashes($feedbackSubject);
		$message = stripslashes($feedbackMessage);
		$headers = 'From: '. $feedbackName .' <' . $feedbackEmail . ">\r\n" .
				'Reply-To: ' . $feedbackEmail;

		$result = mail($to, $subject, $message, $headers);

		if($result)
		{
			$_POST["feedbackName"] = "";
			$_POST["feedbackEmail"] = "";
			$_POST["feedbackSubject"] = "";
			$_POST["feedbackMessage"] = "";
				
			$alert["severity"] = "success";
			$alert["content"] = "Votre message a été envoyé avec succès. Merci à vous.";
		}
		else
		{
			$alert["severity"] = "danger";
			$alert["content"] = "Une erreur est survenue durant l'envoi de votre message. Si celle-ci persiste, veuillez envoyer directement un mail à l'adresse ".$emailFeedback.". Désolé.";
		}
	}
}
?>