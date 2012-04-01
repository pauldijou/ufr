<?php
function displayFeebbackFields($id) {
	$result = "";
	
	$result .= field($id, "feedbackName", "Nom");
	$result .= field($id, "feedbackEmail", "Email");
	$result .= field($id, "feedbackSubject", "Sujet");
	$result .= field($id, "feedbackMessage", "Message", "textArea");

	echo($result);
}

function field($idForm, $name, $label, $type = "inputText")
{
	global $feedbackErrors;
	
	$idField = $idForm."-".$name;
	$hasErrors = array_key_exists($name, $feedbackErrors);
	$result = "";
	
	$result .= openControlGroup($hasErrors);
	
		$result .= label($label, $idField);
		$result .= openControls($hasErrors);
			$result .= input($idField, $name, $type);
			if($hasErrors)
			{
				$result .= helpBlock($feedbackErrors[$name]);
			}
		$result .= closeControls();
	
	$result .= closeControlGroup();
	
	return $result;
}

function openControlGroup($hasErrors)
{
	$result = '<div class="control-group';
	
	if($hasErrors)
	{
		$result .= ' error';
	}
	
	$result .= '">';
	
	return $result;
}

function closeControlGroup()
{
	return '</div>';
}

function label($value, $for)
{
	return '<label for="'.$for.'" class="control-label">'.$value.'</label>';
}

function openControls()
{
	return '<div class="controls">';
}

function closeControls()
{
	return '</div>';
}

function input($id, $name, $type)
{
	global $_POST;

	if($type == "textArea")
	{
		$result = '<textarea rows="5"';
	}
	else
	{
		$result = '<input type="text"';
	}
	
	$result .= ' id="'.$id.'"';
	$result .= ' name="'.$name.'"';
	$result .= ' class="input-xlarge"';
	
	if($type == "textArea")
	{
		$result .= ">";
	}
	else
	{
		$result .= ' value="';
	}
	
	if(isset($_POST[$name]))
	{
		$result .= $_POST[$name];
	}
	
	if($type == "textArea")
	{
		$result .= "</textarea>";
	}
	else
	{
		$result .= '"/>';
	}
	
	return $result;
}

function helpBlock($value)
{
	return '<p class="help-block">'.$value.'</p>';
}
?>