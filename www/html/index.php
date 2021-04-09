<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example</title>
  </head>
  <body>
    <h1>脆弱性実装</h1>
    <h2>クロスサイトスクリプティング</h2>
    <form action="./xss.php" method="get">
      title: <input type="text" name="title"
        size=100
        value="<script>window.onload=function(){alert('hogehoge');}</script>"
        placeholder="<script>window.onload=function(){alert('hogehoge');}</script>"/><br>
      <input type="submit" />
    </form>
    <h2>HTTPレスポンスヘッダインジェクション</h2>
    <form action="./responseHeaderInjection.php" method="get">
      title: <input type="text" name="title"
        size=100
        value="&\#13;&\#10;<script>window.onload=function(){alert('hogehoge');}</script>"
        placeholder="&\#13;&\#10;<script>window.onload=function(){alert('hogehoge');}</script>"/><br>
      <input type="submit" />
    </form>
    <p>
      ※テキストボックスに入力されている値をレスポンスヘッダのTitleに設定して発生させようとしたが、<>
      想定したとおりの動きをしてくれないので、遷移先側でベタ書きで設定。
    </p>

  </body>
</html>
