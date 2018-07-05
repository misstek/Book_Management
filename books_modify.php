<html>
	<head>
		<title>修改书目信息</title>
	</head>
	<body>	
		<?php
            $batcode = $_GET['batcode'];
            
            include "conn.php";
            

            
			$result=mysqli_query($con,"select * from books where batcode = $batcode");
			$info = mysqli_fetch_array($result)//即便我只查一条，我也用这个方法了。
		?>
		<form action = "books_modify_ok.php" method = "POST">
        <label>书名</label>
        <input type ="text" name ="bookname" value = "<?php echo $info['bookname'];?>"></input></br>
		<label>作者</label>
		<input type = "text" name = "author" value = "<?php echo $info['author'];?>"></input></br>
		<label>出版时间</label>
		<input type = "text" name = "printtime" value = "<?php echo $info['printtime'];?>"></input></br>
		<label>条形码</label>
		<input type = "text" name = "batcode" value = "<?php echo $info['batcode'];?>"></input></br>
		<label>书目类型</label>
		<input type = "text" name = "booktype" value = <?php echo $info['booktype'];?>></input></br>
		<button type = "submit" >提交</button>
    </body>
   <?php mysqli_close($con);?>
</html>