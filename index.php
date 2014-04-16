<html>

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>

<body>
 
 <?php
    if (!$_COOKIE["mycookie_name"]) {
      ?>
  <form action="login.php" method="post">
   
 Name : <input type="text" name="name"/>
    
Password : <input type="password" name="password"/>

 <input type="submit"/>

<a class="a" href="zhuce.php">注册</a>
 </form>

 
<?php } ?>
</body>
</html>