<?php

	// bot
	// https://api.telegram.org/bot1009852346:AAHmjlnjCtGWkBi8w19lmkBy5nxqQgR269c/getUpdates
		
	$token = "1009852346:AAHmjlnjCtGWkBi8w19lmkBy5nxqQgR269c";
	$chat_id = "-487566904";


	// 
	if(isset($_GET['mess'])) {
		$sms = strip_tags($_POST['sms']);
		$name  = strip_tags($_POST['name']);
		$phone = strip_tags($_POST['phone']);
		$phone = substr_replace($phone, '', 0, 1);
		$phone = substr_replace($phone, '8', 0, 1);

		$arr = array(
			'Типі: '			=> $sms,
			'Аты-жөні: '	=> $name,
			'Телефон: ' 	=> $phone
		);

		foreach($arr as $key => $value) {$txt .= "<b>".$key."</b> ".$value."%0A";};
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
		if ($sendToTelegram) echo "yes"; else echo "error";

		exit();
	}


	// 
	if(isset($_GET['sms'])) {
		$sms = strip_tags($_POST['sms']);
		$phone = strip_tags($_POST['phone']);
		$phone = substr_replace($phone, '', 0, 1);
		$phone = substr_replace($phone, '8', 0, 1);

		$arr = array(
			'Типі: '			=> $sms,
			'Телефон: ' 	=> $phone
		);

		foreach($arr as $key => $value) {$txt .= "<b>".$key."</b> ".$value."%0A";};
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
		if ($sendToTelegram) echo "yes"; else echo "error";

		exit();
	}