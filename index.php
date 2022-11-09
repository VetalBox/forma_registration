<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
				integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="/js/js.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <title>Регистрация</title> 

</head>

<body>

<div id="block-content">

	<h2 class="h2-title">Регистрация</h2>

	<form id="formRegistr" method="post" onsubmit="return false">
				  <div>
					<label for="fname" class="form-label">Имя:</label>
					<input type="text" class="form-control" id="fname" name="fname"></input>
				  </div>
				  <div>
					<label for="lname" class="form-label">Фамилия:</label>
					<input type="text" class="form-control" id="lname" name="lname"></input>
				  </div>
				  <div>
					<label for="user_email" class="form-label">Email:</label>
					<input type="email" class="form-control" id="user_email" name="user_email"></input>
				  </div>
				   <div>
					<label for="login" class="form-label">Логин:</label>
					<input type="text" class="form-control" id="login" name="login"></input>
				  </div>
				  <div>
					<label for="psword" class="form-label">Пароль:</label>
					<input type="password" class="form-control" id="psword" name="psword"></input>
				  </div>
		  <div>
			<input type="submit" class="btn btn-primary" value="Регистрация" />
		  </div>
	</form>

</div>
</body>


</html>

