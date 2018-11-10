<meta charset="utf-8" /> 
<?php
if(!isset($_POST['submit'])){  
exit('非法访问!');  
}  
$username = htmlspecialchars($_POST['admin_user']);  
$password = MD5($_POST['admin_pwd']); 
include "./conn.php";
$check_query = mysql_query("select * from `admin` where user='$username' and pwd='$password' limit 1");  
if($result = mysql_fetch_array($check_query)){  
 echo $username,' 登陆成功！'; 
} else {
  echo "您输入的账号为; $username<br />密码:$password<br />";
  exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');  
}  