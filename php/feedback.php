<?php

	$not_all_message = "Fill in all fields";
	$no_message = "Permission denied";

	if((!empty($_GET['name'])) and (!empty($_GET['email'])) and (!empty($_GET['tel'])) and (!empty($_GET['message']))){
		
		if(!empty($_GET['no'])){
			die($no_message);
		}
				
		$name = trim(strip_tags($_GET['name']));
		$tel = trim(strip_tags($_GET['tel']));
		$mail = trim(strip_tags($_GET['email']));
		$message = trim(strip_tags($_GET['message']));

		$to  = "mcrack@yandex.ru";
		$site_name = 'turro.ru';
		$site_redirect = '/';

		mail($to, 'Письмо c сайта: ' . $site_name, 'Вам написал: '.$name.'<br />Его номер: '.$tel.'<br />Его почта: '.$mail.'<br />Его сообщение: '.$message,"Content-type:text/html;charset=UTF-8");

		echo 'Форма успешно отправлена, для того, чтобы вернуться на сайт, <a href="' . $site_redirect . '">НАЖМИТЕ СЮДА</a>';
		die();
	}
	
	die($not_all_message);