<?php
	require_once dirname(__FILE__).'/function.php'; 
	function requiredCheck() {
		$errors = null;
		if (is_null($_POST['name']) || empty($_POST['name'])) $errors[] = '・名前が入力されていません';
		if (is_null($_POST['hurigana']) || empty($_POST['hurigana'])) $errors[] = '・フリガナが入力されていません';
		if (is_null($_POST['address']) || empty($_POST['address'])) $errors[] = '・住所が入力されていません';
		if (is_null($_POST['mailAddress']) || empty($_POST['mailAddress'])) {
			$errors[] = '・メールアドレスが入力されていません';	
		} else if (!filter_var($_POST['mailAddress'], FILTER_VALIDATE_EMAIL)) {
			$errors[] = '・メールアドレスの形式が正しくありません';				
		}
		if (is_null($_POST['mailAddress']) || empty($_POST['mailAddress'])) $errors[] = '・メールアドレスの形式が正しくありません';
		if (is_null($_POST['mailAddressConfirm']) || empty($_POST['mailAddressConfirm'])) $errors[] = '・メールアドレス(確認)が入力されていません';
		if ($_POST['mailAddress'] != $_POST['mailAddressConfirm']) $errors[] = '・メールアドレスとメールアドレス(確認)が異なります。';
		if (is_null($_POST['telNo']) || empty($_POST['telNo'])) {
			$errors[] = '・電話番号が入力されていません';
		} else if (!preg_match('/^0[0-9]{9,10}$/', $_POST['telNo'])) {
			$errors[] = '・電話番号の形式が正しくありません';							
		}
		if (is_null($_POST['message']) || empty($_POST['message'])) $errors[] = '・お問い合わせ内容が入力されていません';
		$_POST['name'] = h($_POST['name']);
		$_POST['hurigana'] = h($_POST['hurigana']);
		$_POST['address'] = h($_POST['address']);
		$_POST['mailAddress'] = h($_POST['mailAddress']);
		$_POST['mailAddressConfirm'] = h($_POST['mailAddressConfirm']);
		$_POST['telNo'] = h($_POST['telNo']);
		$_POST['message'] = h($_POST['message']);
		if (count($errors) == 0) return true;
		echo '<div style="margin-left:560px;">';
		for ($i = 0;$i < count($errors); $i++) {
			echo '<p style="font-size:14px;color:red;">'.$errors[$i].'</p>';			
		}
		echo '</div>';
		return false;
	}
?>