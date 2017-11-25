<?php
	function requiredCheck() {
		$errors = null;
		$name = $_POST['name'];
		$hurigana = $_POST['hurigana'];
		$address = $_POST['address'];
		$mailAddress = $_POST['mailAddress'];
		$mailAddressConfirm = $_POST['mailAddressConfirm'];
		$telNo = $_POST['telNo'];
		$message = $_POST['message'];
		if (is_null($_POST['name']) || empty($_POST['name'])) $errors[] = '・名前が入力されていません';
		if (is_null($_POST['hurigana']) || empty($_POST['hurigana'])) $errors[] = '・フリガナが入力されていません';
		if (is_null($_POST['address']) || empty($_POST['address'])) $errors[] = '・住所が入力されていません';
		if (is_null($_POST['mailAddress']) || empty($_POST['mailAddress'])) $errors[] = '・メールアドレスが入力されていません';
		if (is_null($_POST['mailAddressConfirm']) || empty($_POST['mailAddressConfirm'])) $errors[] = '・メールアドレス(確認)が入力されていません';
		if ($_POST['mailAddress'] != $_POST['mailAddressConfirm']) $errors[] = '・メールアドレスとメールアドレス(確認)が異なります。';
		if (is_null($_POST['telNo']) || empty($_POST['telNo'])) $errors[] = '・電話番号が入力されていません';
		if (is_null($_POST['message']) || empty($_POST['message'])) $errors[] = '・お問い合わせ内容が入力されていません';		
		if (count($errors) == 0) return true;
		echo '<div style="margin-left:560px;">';
		for ($i = 0;$i < count($errors); $i++) {
			echo '<p style="font-size:14px;color:red;">'.$errors[$i].'</p>';			
		}
		echo '</div>';
		return false;
	}
?>