<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>XSS</title>
  </head>
  <body>
    <?php
      echo "Title: not use htmlspecialchars :" . $_GET['title'] . "<br>";
      echo "Title: use htmlspecialchars :" . htmlspecialchars($_GET['title']);
    ?>
    <hr>
    <!-- 
    <h3>headers_list()</h3>
    <?php
      // foreach(headers_list() as $value){
      //   echo $value . "<br>";
      // }
    ?>
    -->
    <!-- 
    <hr>
    <h3>headers_sent()</h3>
    <?php
      // foreach(headers_sent() as $value){
      //   echo $value . "<br>";
      // }
    ?>
    -->
    </body>
</html>