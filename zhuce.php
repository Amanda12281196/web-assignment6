


<html> 
<head> 
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>注册</title> 
</head>
<body>



   <form method="post" action="insert.php" name="send" onSubmit="return Check()"> 
     
          <p>用户名：        
               
                    <input type="text" name="username" size="20" class="c3a">
                    <font color="#FF6699">*</font>
     </p>
          <p>密码：         
                 
                    <input type="password" name="password" size="20" class="c3a"> 
            <font color="#FF6699">*</font></p>
          <p>确认密码：
            <input name="cpassword" type="password" id="cpassword">
            <font color="#FF6699">*</font></p>
          <p>email:<label>
          <input name="email" type="text" id="email">
            </label>
            <font color="#FF6699">*</font></p>
          <label></label>
         性别：男
                    <input type="radio" name="sex" value="male" />
                    <label></label>
                    <p>女
                      <input type="radio" name="sex" value="female" />
                    <p>
                      <input type="submit" value="下一步" > 
                      <input type="reset" value="重来"> 
    </p>
</form> 
<script language="javascript">
function Check()// 验证表单数据有效性的函数
{
    if (document.send.username.value=="") 
    {
        window.alert('请输入用户名!'); 
        
        return false;
    }
    if (document.send.username.value.length<4) 
    {
        window.alert('用户名长度必须大于4!'); 
        
        return false;
    }
    if (document.send.password.value=="") 
    {
        alert('请输入密码!'); 
        
        return false;
    }
    if (document.send.password.value.length<6) 
    {
        alert('密码长度必须大于6!'); 
        return false;
    }
    if (document.send.password.value!= document.send.cpassword.value) 
    {
        alert('确认密码与密码不一致!'); 
        return false;
    }
    if (document.send.email.value=="")
    {
        alert('请输入Emai!');
         
        return false;
    }
    if(document.send.email.value.indexOf("@")==-1)
    {
        alert('请输入有效的email地址!'); return false;
    }
    
    return true;
}

</script>
</body>
</html>
