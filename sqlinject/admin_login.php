<meta charset="utf-8" /> 
<?php
if(!isset($_POST['submit'])){  
exit('�Ƿ�����!');  
}  
$username = htmlspecialchars($_POST['admin_user']);  
$password = MD5($_POST['admin_pwd']); 
include "./conn.php";
$check_query = mysql_query("select * from `admin` where user='$username' and pwd='$password' limit 1");  
if($result = mysql_fetch_array($check_query)){  
 echo $username,' ��½�ɹ���'; 
} else {
  echo "��������˺�Ϊ; $username<br />����:$password<br />";
  exit('��¼ʧ�ܣ�����˴� <a href="javascript:history.back(-1);">����</a> ����');  
}  