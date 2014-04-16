<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
$username   = $_POST['username'];
$password   = $_POST['password'];
$cpassword = $_POST['cpassword'];
$username   = $_POST['username'];
$email      = $_POST['email'];
if (!empty($username)) {        // 用户填写了数据才执行数据库操作
    // 调用mysqli的构造函数建立连接，同时选择使用数据库'test'
    $db = @new mysqli("127.0.0.1", "developer", "123456", "test");
    // 检查数据库连接
    if (mysqli_connect_errno()) {
        echo "数据库连接失败!<br>\n";
        echo mysqli_connect_error();
        exit;   // 退出程序，后面的所有语句将不再执行
    }
   
    // 将用户信息插入数据库的t_user表
    $sql = "INSERT INTO t_user (f_username, f_password, f_name, f_email) VALUES";
    $sql .= "('$username', '$pwd', '$name', '$email')";
    $rs = $db->query($sql);
    if (!$rs) {
        $db->close(); // 关闭数据库连接
        echo '数据记录插入失败!';
        exit;
    }
    echo "<font color='red' size='5'>恭喜您注册成功!</font><br>\n";
    // 关闭数据库连接
    $db->close();
}
?>