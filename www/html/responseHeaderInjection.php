<?php header("Title:\n<script>window.onload=function(){alert('hogehoge');}</script>"); ?>
<!-- <?php // header("Title: " . $_GET["title"]); ?> -->
<!-- ダメだ発生しねぇ -->
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>HTTPレスポンスヘッダインジェクション</title>
  </head>
  <body>
    Hello World!
  </body>
</html>
