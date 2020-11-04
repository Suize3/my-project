<body class="color-admin">
<style type="text/css">
	.color-admin{
		background: #237a78;
	}
	.mt-300{
		margin-top: 300px
	}
	.ml-900{
		margin-left: 900px
	}
	.ml-855{
		margin-left: 855px
	}
</style>
<form action="insert.php" method="GET">
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--input-tittle-->
<div class="form-group">
	<h3 class="mt-300 ml-855">Добавить товар</h3>
	<input name="tittle" class="form-control col-2 mx-auto" placeholder="Название товара"></input>
</div>
<!--input-description-->
<div class="form-group">
	<input name="description" class="form-control col-2 mx-auto" placeholder="Описание"></input>
</div>
<!--input-price-->
<div class="form-group"> 
	<input name="price" class="form-control col-2 mx-auto" placeholder="Цена"></input>
</div>
<!--input-img-->
<div class="form-group">
	<input name="img" class="form-control col-2 mx-auto" placeholder="Картинка"></input>
</div>
<!--button-->
<div class="ml-900">
	<button class="btn btn-primary">Добавить</button>
</div>
</form>
</body>