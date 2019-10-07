<?php

//	require 'c_config.php';
define('XPEEDSTUDIO_EMAIL', 'kosta232st@yandex.ru');
define('XPEEDSTUDIO_SUBJECT', 'Вопрос с сайта Dyslexia.PRO');
define('XPEEDSTUDIO_SUCCESS_MASSAGE', 'Successfully Sent Email');

	$xs_contact_name = $_POST['xs_contact_name'];
	$xs_contact_email = $_POST['xs_contact_email'];
	$x_contact_massage = $_POST['x_contact_massage'];

	$e_content = "You have been contacted by ". $xs_contact_email . ". Their additional massage is as follow. <br><br>";

	$e_content .= "Name : " . $xs_contact_name .  "<br><br>";
	$e_content .= "Massage body : " . $x_contact_massage . "<br><br>";
	$e_content .= "You can contact $xs_contact_email via email, $xs_contact_email";


//	$headers = "From: " . $xs_contact_email . PHP_EOL;
	$headers = "From: no_reply <noreply@moreeven.com> " .PHP_EOL;
	$headers .= "Reply-To: $xs_contact_email" . PHP_EOL;
	$headers .= "MIME-Version: 1.0" . PHP_EOL;
	$headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;



//	$mail = mail(XPEEDSTUDIO_EMAIL, XPEEDSTUDIO_SUBJECT, $e_content, $headers);
//	$mail = mail(XPEEDSTUDIO_EMAIL, XPEEDSTUDIO_SUBJECT, $e_content);
    $mail = mail("kosta232st@yandex.ru","Message from dyslexia.pro",
        $xs_contact_name. PHP_EOL. $xs_contact_email. PHP_EOL.  $x_contact_massage);

	if ($mail) {
		echo XPEEDSTUDIO_SUCCESS_MASSAGE;
	} else {
	    echo "MAIL Problems";
    }

?>