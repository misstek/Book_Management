
<?php

ini_set("display_errors", "On");
error_reporting(E_ALL & ~E_NOTICE);

include"conn.php";
    
$batcode = $_POST['batcode'];
$bookname = $_POST['bookname'];
$author = $_POST['author'];
$printtime = $_POST['printtime'];
$booktype = $_POST['booktype'];


$sql="UPDATE books SET bookname = '$bookname',author = '$author',printtime = '$printtime',booktype = '$booktype' WHERE batcode = '$batcode'";
//echo("$sql");

if ($con->query($sql) === TRUE) {  
   // echo "新记录插入成功";  
} else {  
    echo "Error: " . $sql . "<br>" . $con->error;  
}  
echo "<script language='javascript'>alert('图书信息修改成功!');window.location.href='http://www.ppxdata.com/books.php';</script>";
?>