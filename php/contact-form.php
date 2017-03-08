<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

//require 'php-mailer/class.phpmailer.php';

// Your email address
$to = 'marco@dalborgo.it';
//$to = 'info@asten.it';;
$subject = 'Mail dal sito';
$chi=$_POST['name'].' '.$_POST['lname'];
if($to) {
/*
	$name = $_POST['name'];
	$email = $_POST['email'];
	*/

	$fields = array(
		0 => array(
			'text' => 'Nome e Cognome',
			'val' => $_POST['name'].' '.$_POST['lname']
		)
        ,1 => array(
			'text' => 'Telefono',
			'val' => $_POST['phone']
		)
        ,2 => array(
			'text' => 'Email',
			'val' => $_POST['email']
		)
        ,3 => array(
			'text' => 'Messaggio',
			'val' => $_POST['message']
		)
	);
	
	$message = "";
	
	foreach($fields as $field) {
		$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "\n";
	}

// The message
    $headers = 'From: Sito Hotel Panorama  <noreply@asten.it>' . PHP_EOL .
        'Reply-To: '.$chi.' <'.$_POST['email'].'>' . PHP_EOL .
        'X-Mailer: PHP/' . phpversion();
// Send
$res=mail($to, $subject, $message, $headers);

//$res=true;
	if(!$res) {
	   $arrResult = array ('response'=>'error');
	}

	$arrResult = array ('response'=>'success');

	echo json_encode($arrResult);
	
} else {

	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);

}
?>