<?php
ini_set("display_errors", "On");
error_reporting(E_ALL & ~E_NOTICE);


//	include("conn.php");
  	$con = mysqli_connect("xxx.xxx.xxx.xxx:3306","root","*********","books");
if ($con->connect_errno) {
    echo("2");
    die();
}

mysqli_query($con,"set names utf8");
	if(!$con){
		dis("ERROR:".mysqli_error());
	}
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
		<td>".$row['barcode']."</td>
		<td>".$row['booktype']."</td>
		</tr>";
	}
echo"<table>";



	// mysqli_select_db($con,"books");
	// mysqli_query($con,"set names utf8");
  
  
	$bookname = $_POST['bookname'];
	$author = $_POST['author'];
	$printtime = $_POST['printtime'];
	$barcode = $_POST['barcode'];
	$booktype = $_POST['booktype'];
	// $bookname = 987;
	// $author = 987;
	// $printtime = 987;
	// $barcode = 87;
	// $booktype = 987;




$sql="INSERT INTO books(bookname,author,printtime,batcode,booktype)VALUES('$bookname','$author','$printtime','$barcode','$booktype')";

 //$sql="INSERT INTO books(bookname,author,printtime,batcode,booktype)VALUES('789','789','789','789','789')";
//   echo($sql);


// 	mysqli_query($con,$sql);  
// 	mysqli_insert_id($con);


if ($con->query($sql) === TRUE) {  
    echo "新记录插入成功";  
} else {  
    echo "Error: " . $sql . "<br>" . $con->error;  
}  
  
 mysqli_close($con);
 echo("done!"); echo("1");
 die();
?>