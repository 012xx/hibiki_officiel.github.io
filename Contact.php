<?php

if(isset($_POST['name'])) {
if ($_POST["name"] == ""){
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/Contact.css">
  <title>嵩原ひびき_official</title>
</head>
<body>
<!-- header -->
  <header>
  <img src="picture/logo.png" class="headline">
  <ul class="nav-list">
  <li class="nav-list-item"><a href="index.html">Home</a></li>
  <li class="nav-list-item"><a href="Works.html">Works</a></li>
  <li class="nav-list-item"><a href="About.html">About</a></li>
  <li class="nav-list-item">Contact</li>
  </ul>
</header>
  
  <!-- サイトの中身部分 -->
<div class="all">
 <div class="title"><img src="picture/contactpicture/contact.png"></div>
<div>ご意見・リクエスト…いろいろどーぞ</div>
<div class="form">
<form action="confirm.php" method="post" name="form" onsubmit="return validate()">

<div class="box">
<p>名前*</p>
  <input class="respon" id="name" type="text" name="name" required="required" placeholder="あなたのことを教えてください">
</div>

<div class="box">
<div class="c-block-input">
  <div class="c-block-input__items">
    <div class="c-block-input__title">どこから嵩原を知りましたか？*
    </div>
    <div class="c-block-input__radio">
      <input type="radio" name="radio" value="Twitter" id="radio01" checked>
      <label for="radio01">Twitter</label>
     　 <input type="radio" name="radio" id="radio02" value="YouTube">
      <label for="radio02">YouTube</label>
     　 <input type="radio" name="radio" id="radio03" value="現実">
      <label for="radio03">現実</label>
     　 <input type="radio" name="radio" id="radio04" value="その他">
      <label for="radio04">その他</label>
    </div>
  </div>
</div>
</div>

<div class="box">
<p>ご意見・リクエストがあればどうぞ</p>
<tr><td><textarea class="respon" name="iken" rows="10" placeholder="悪口は書かないでね"></textarea></td></tr>
</div>
</div>
<div class="box1">
<tr><td><input type="reset" value="やり直し" class="button">    
        <input type="submit" value="送信" class="button1"></td></tr>
</div>
</form>
</div>
</div>
<!-- footer -->
<footer>
    <br>
    <ul class="footer-menu">
    <li><a href="index.html" id="line">Home ｜</a></li>
    <li><a href="Works.html" id="line">Works ｜</a></li>
    <li><a href="About.html" id="line">About ｜</a></li>
    <li>Contact</li>
    </ul>
    <p>© 2021 team-BPR.</p>
</footer>
</body>
</html>

