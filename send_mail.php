<?php
	$mailTo  = 'riki.nakajima@gmail.com';
	$returnMail = 'riki.nakajima@gmail.com';
	$subject = 'ホームページより問い合わせがあります。';

	$msg = $_POST['name'] . '様からのお問い合わせを受け付けました。'."\n";
	$msg .= '内容は以下のとおりです。'."\n";
	$msg .= '--------------------'."\n";
	$msg .= '氏名：'.$_POST['name']."\n";
	$msg .= 'フリガナ：'.$_POST['hurigana']."\n";
	$msg .= '住所：'.$_POST['address']."\n";
	$msg .= 'Email：'.$_POST['mailAddress']."\n";
	$msg .= '電話番号：'.$_POST['telNo']."\n";
	$msg .= '--------------------'."\n";
	$msg .= 'お問い合わせ内容：'.$_POST['message']."\n";
	$msg .= '--------------------'."\n";
	$msg .= 'twenty bottles株式会社宛' ;
		
	$header = 'From: ' . mb_encode_mimeheader($_POST['name']) . ' <' . $_POST['mailAddress']. '>';
	
	if (ini_get('safe_mode')) {
	  $result = mb_send_mail($mailTo, $subject, $msg, $header);
	} else {
	  $result = mb_send_mail($mailTo, $subject, $msg, $header, '-f ' . $returnMail);
	}
	require_once 'mail_complete.php';
?>
