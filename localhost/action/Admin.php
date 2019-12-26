<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<h1>Панель типу адміна ...</h1>
	<form class="admin_panel" action="action_add.php" method="post" enctype="multipart/form-data">
		<input type="text" name="title" placeholder="Назва" class="bla">
		<input type="text" name="price" placeholder="Ціна" class="bla">
		<input type="text" name="company_name" placeholder="Назва компанії" class="bla">
		<input type="text" name="product_description" placeholder="Опис" class="bla">
		<input type="file" name="image" placeholder="Картинка" class="bla">
		<input type="text" name="product_type" placeholder="Тип продукту" class="bla">
		<input type="submit">
	</form>
</body>
</html>