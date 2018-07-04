<?php
//phpinfo();
?>
<html>
	<head>
		<title>添加书目信息</title>
	</head>
	<body>
		<form action = "books_add_ok.php" method = "POST">
		<label>书名</label>
		<input type = "text" name = "bookname"></input></br>
		<label>作者</label>
		<input type = "text" name = "author"></input></br>
		<label>出版时间</label>
		<input type = "text" name = "printtime"></input></br>
		<label>条形码</label>
		<input type = "text" name = "barcode"></input></br>
		<label>书目类型</label>
		<input type = "text" name = "booktype"></input></br>
		<button type = "submit" >提交啊</button>
	</body>
	</html>
