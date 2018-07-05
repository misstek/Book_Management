
<?php
	$batcode = $_GET['batcode'];
	include "conn.php";
    $sql = "DELETE from books where batcode = '$batcode'";
    mysqli_query($con,$sql);
    if ($con->query($sql) === TRUE) {  
        echo "新记录插入成功";  
    } else {  
        echo "Error: " . $sql . "<br>" . $con->error;  
    }  
	echo "<script language='javascript'>alert('图书信息删除成功!');window.location.href='http://www.ppxdata.com/books.php';</script>";
?>