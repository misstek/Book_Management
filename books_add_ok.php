<?php
ini_set("display_errors", "On");
error_reporting(E_ALL & ~E_NOTICE);


	include("conn.php");

	 echo "success\n";
	$sql="select * from books";
	$result=mysqli_query($con,$sql);
	echo"
	<table>
	<tr>
			<th>书名:</th>
			<th>作者: </th>
			<th>出版时间:</th>
			<th>条形码:</th>
			<th>类型: </th>
		</tr>
	";

while ($row=mysqli_fetch_array($result)) {
		# code...
		echo "
		
		<tr>
		<td> ".$row['bookname']."</td>
		<td>".$row['author']." </td>
		<td>".$row['printtime']."</td>
		<td>".$row['batcode']."</td>
		<td>".$row['booktype']."</td>
		</tr>";
	}
echo"<table>";



	// mysqli_select_db($con,"books");
	// mysqli_query($con,"set names utf8");
  
  
	$bookname = $_POST['bookname'];
	$author = $_POST['author'];
	$printtime = $_POST['printtime'];
	$batcode = $_POST['batcode'];
	$booktype = $_POST['booktype'];





$sql="INSERT INTO books(bookname,author,printtime,batcode,booktype)VALUES('$bookname','$author','$printtime','$batcode','$booktype')";

 //$sql="INSERT INTO books(bookname,author,printtime,batcode,booktype)VALUES('789','789','789','789','789')";
//   echo($sql);


// 	mysqli_query($con,$sql);  
// 	mysqli_insert_id($con);

mysqli_query($con,$sql);
// if ($con->query($sql) === TRUE) {  
//     echo "新记录插入成功";  
// } else {  
//     echo "Error: " . $sql . "<br>" . $con->error;  
// }  
  
 mysqli_close($con);
 echo "<script language='javascript'>window.location.href='http://www.ppxdata.com/books.php';</script>";

?>