<?php


//  token example: 5757694525:AAEwgUAOcVRkLZnZGkUYdI3YKeOEyzeVSrw
//  chat_id example: -1001716437094
// https://www.youtube.com/channel/UCYuMRNb_SRZ4FMsZjnHRZUA video


$token = "5757694525:AAEwgUAOcVRkLZnZGkUYdI3YKeOEyzeVSrw"; // Telegram bot token
$chat_id = "-1001716437094"; // Telegram chat ID
$proovl_token = "7FBlNDg9yf5GFP3cs4pkmxjGLtH2PdHj"; // Proovl.com Token

    $id = $_REQUEST['id'];
	$token = $_REQUEST['token'];
	$from = $_REQUEST['from'];
	$to = $_REQUEST['to'];
	$text = $_REQUEST['text'];
	
	
	if ($token == "7FBlNDg9yf5GFP3cs4pkmxjGLtH2PdHj") {
	
	
	$url = "https://api.telegram.org/bot5757694525:AAEwgUAOcVRkLZnZGkUYdI3YKeOEyzeVSrw/sendMessage";

	$postfields = array(
   		'chat_id' => "$chat_id",
   		'disable_notification' => "True",
   		'parse_mode' => "HTML",
        'text' => "From number<b>$from</b>  To number:<pre>$to</pre>  SMS text:<i>$text</i>",
	);


if (!$curld = curl_init()) {
		exit;
	}

	curl_setopt($curld, CURLOPT_POST, true);
	curl_setopt($curld, CURLOPT_POSTFIELDS, $postfields);
	curl_setopt($curld, CURLOPT_URL,$url);
	curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($curld);

 curl_close ($curld);
	
	
		echo "Thank you $from for sending $message";
	} else {
		echo "Incorrect token";
		die;
	}



?>
