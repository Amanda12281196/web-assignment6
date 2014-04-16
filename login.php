
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<a href="logout.php">logout</a>
</body>
</html>

<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if($_POST['name'] == "")

{

     echo "请填写用户名<br><a href='index.php'>返回</a>";

}elseif($_POST['password'] == "")

{

     echo "请填写密码<br><a href='index.php'>返回</a>";

}
else
{
$link = mysql_connect("localhost:3306","student","123456");
mysql_select_db('test');
$query = "select * from admin where username='$username' and password='$password'";
$result = mysql_query($query);
$row=mysql_num_rows($result);
if($row>0)
{
$_SESSION['issession']=true;
$_SESSION['username']=$username;

echo "<script language=\"JavaScript\">\r\n"; 
                   echo " alert(\"登陆成功\");\r\n"; 
                   echo " location.replace(\"success.php\");\r\n"; 
                   echo "</script>"; 
                   exit; 

}
else
{echo "<script language=\"JavaScript\">\r\n"; 
        echo " alert(\"您输入的密码不正确！请重新输入！\");\r\n"; 
        echo " history.back();\r\n"; 
        echo "</script>"; 
        exit; 
}
}
mysql_close();


?>