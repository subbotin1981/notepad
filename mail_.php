<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<!--	<link rel="stylesheet" href="css/style.css">-->
<!--	<link rel="stylesheet" href="css/les.css">-->
	<title>Статус отправки письма</title>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div id="mailform">
	<?php
		if (isset($_POST['name'])) {$name = $_POST['name'];}
		if (isset($_POST['email'])) {$email = $_POST['email'];}
		if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
		if (isset($_POST['mess'])) {$mess = $_POST['mess'];}

		$to = "subbotin1981@gmail.com";
		$charset = "utf-8";
//		$subject = "Тема";
		$message = "Имя: $name. \ne-mail: $email. \nТелефон: $phone. \nСообщение: $mess.";
		$from = "$email";
//		$headers  = "MIME-Version: 1.0";
		$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
		$headers .= "From: $from";
		$send = mail ($to, $subject, $message, $headers);


		if ($send == 'true')
		{
			echo "<p style='color:#339900; font-size:18px; align-content: center' >Спасибо за отправку вашего сообщения!</p></>";
			echo "<p style='align-content: center'; font size='3'><a href=/>Перейти на главную</a></pfont></>";
		}
		 else
		 {
		 echo "<b>Ошибка. Сообщение не отправлено!</b>";
		 }
	?>

</div>
</body>
</html>