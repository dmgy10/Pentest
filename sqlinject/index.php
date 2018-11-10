<html>
<head> 
<meta charset="utf-8" /> 
<title>sql注入测试</title> 
<style> 
body{text-align:center} 
</style> 
</head> 
<body > 

<br />
<?php
	include "./conn.php";
	$id=@$_GET['id'];//id未经过滤
	if($id==null){
		$id="1";
	}
	mysql_query('set names utf8');
	$sql = "SELECT * FROM sqltest WHERE id=$id";//定义sql语句并组合变量id  
	$result = mysql_query($sql,$conn);//执行sql语句并返回给变量result 
	if(!$result)
    {
        die('<p>error:'.mysql_error().'</p>');
    }
	echo "<font size='10' face='Times'>sql注入测试</font></br>";
	echo "<table border='2'  align=\"center\">";
	echo "<tr><td>id</td>";
	echo "<td>标题</td>";
	echo "<td>内容</td>";
	echo "</tr>";
	//遍历查询结果
     while ($row = mysql_fetch_array($result))
	{
	if (!$row){
		echo "该记录不存在";
		exit;
	}
			echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "</tr>";
	}
	echo "<td  colspan=\"3\" >sql语句:&nbsp;>".$sql."</td>";
	echo "</table>";
	?>
<a href='./admin.php'>点我进入后台</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href='http://pmd5.com/'>md5解密可以点我</a>
</body> 
</html> 