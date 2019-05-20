<?php
	if{isset['g-recatcha-response'])&& $_POST['g-recatcha-response']){
		var_dump($_POST);
		$secret="6LdGbpIUAAAAALPpKEodNgjSHVHCU3mq6-2o_t8p";
		$ip=$_SERVER['REMOTE_ADDR'];
		$captcha=$_POST['g-recatcha-response'];
		$rsp=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&$remoteip$ip");
		var_dump($rsp);
		$arr=json_decode($rsp,TRUE);
		if($arr['success'])
		{
			echo 'done';
		}
		else{
			echo 'span';;
		}
	}
	?>