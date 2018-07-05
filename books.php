<?php


	include"conn.php";


	$sql="select * from books";
	$result=mysqli_query($con,$sql);
?>


<html>
	<head>
		<title>emmmmmmmmmmm</title>
	</head>
	<body>

	<table>
	<tr>
			<th>书名:</th>
			<th>作者: </th>
			<th>出版时间:</th>
			<th>条形码:</th>
			<th>类型: </th>
			<th>修改</th>
			<th>删除</th>
			<td><a href = "books_add.php">添加</a></td>
		</tr>
<?php
while ($row=mysqli_fetch_array($result)) {


		# code...


		?>
		
		<tr>
		<td><?php echo $row['bookname'];?></td>
		<td><?php echo $row['author'];?></td>
		<td><?php echo $row['printtime'];?></td>
		<td><?php echo $row['batcode'];?></td>
		<td><?php echo $row['booktype'];?></td>
		<td><a href = "books_modify.php?batcode=<?php echo $row['batcode']?>">
		修改</a></td>
		<td><a href = "books_delete.php?batcode=<?php echo $row['batcode']?>">
		删除</a></td>
		</tr>
		
		
<?php		;
	}
?>


	</body>
</html>

