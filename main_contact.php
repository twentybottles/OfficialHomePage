<?php
	$name = "";
	$hurigana = "";
	$address = "";
	$mailAddress = "";
	$mailAddressConfirm = "";
	$telNo = "";
	$message = "";
	if(array_key_exists("submit", $_GET)) {
		$name = $_POST['name'];
		$hurigana = $_POST['hurigana'];
		$address = $_POST['address'];
		$mailAddress = $_POST['mailAddress'];
		$mailAddressConfirm = $_POST['mailAddressConfirm'];
		$telNo = $_POST['telNo'];
		$message = $_POST['message'];
	}

	echo '
<!-- / メイン画像 -->
<div id="wrapper" align="left">
  <section class="gridWrapper" id="sub">
  <article id="main_area1"  style="margin-bottom:30px;">
	  <h2>お問い合わせフォーム</h2>
  </article>
  <article class="col4" style="margin-top:30px;">
	  <form action="contact.php?submit" method="post">
	  <table class="contact" style="margin-top:0;">
        <tbody>
			<tr>
            	<th>名前</th>
                <td><input class="contact_input" type="text" name="name" size="59" maxlength="30" value="'.$name.'"></td>
            </tr>
            <tr>
            	<th>フリガナ</th>
                <td><input class="contact_input" type="text" name="hurigana" size="59" maxlength="30" value="'.$hurigana.'"></td>
            </tr>
            <tr>
            	<th>住所</th>
                <td><input class="contact_input" type="text" name="address" size="59" maxlength="30" value="'.$address.'"></td>
            </tr>
            <tr>
            	<th>メールアドレス</th>
                <td><input class="contact_input" type="text" name="mailAddress" size="59" maxlength="30" value="'.$mailAddress.'"></td>
            </tr>
            <tr>
            	<th>メールアドレス(確認)</th>
                <td><input class="contact_input" type="text" name="mailAddressConfirm" size="59" maxlength="30" value="'.$mailAddressConfirm.'"></td>
            </tr>
            <tr>
            	<th>電話番号</th>
                <td><input class="contact_input" type="text" name="telNo" size="59" maxlength="30" value="'.$telNo.'"></td>
            </tr>
            <tr>
            	<th>お問い合わせ内容</th>
                <td><textarea class="contact_input" name="message" rows="10" cols="61">'.$message.'</textarea></td>
            </tr>
       </tbody>
	</table>
	<p class="btn" style="margin-top:50px;text-align:center;">
		<input class="submit"style="width:100px;font-size:16px!important;" type="submit" value="送信">
	</p>
	</form>
　</article>
  </section>
</div>';
?>

