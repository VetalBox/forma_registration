<?php
include("functions/db_connect.php");
include("functions/functions.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $error=array();
           
        $name=clear_string($_POST['fname']);
		$surname=clear_string($_POST['lname']);
        $email=clear_string($_POST['user_email']);
		$login=clear_string($_POST['login']);
		$pass=strtolower(clear_string($_POST['psword']));


        if(strlen($name)<3 or strlen($name)>15) $error[]="Укажите имя!";
		if(strlen($surname)<3 or strlen($surname)>20) $error[]="Укажите фамилию!";
        if(!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", trim($email))) $error[]="Укажите корректный E-mail";
		if(strlen($login)<8 or strlen($login)>15) $error[]="Укажите пароль от 8 до 15 символов!";					
		if(strlen($pass)<8 or strlen($pass)>15) $error[]="Укажите пароль от 8 до 15 символов!";

        
        
        if (count($error)){
            echo implode('<br />',$error);
			}
			else{
            $pass=md5($pass);
            $pass=strrev($pass);
            $pass="9nm2rv8q".$pass."2yo6z";
            
            $ip=$_SERVER['REMOTE_ADDR'];
           
            mysqli_query($link, "INSERT INTO `reg_user`(`name`, `surname`, `email`, `login`, `pass`, `datetime`, `ip`)
                            VALUES(
                            '".$name."',
							'".$surname."',
							'".$email."',
							'".$login."',						
                            '".$pass."',
          
                            NOW(),
                            '".$ip."'
                                                 
                            )");            
}
}  
	
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
				integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <title>Регистрация</title> 

</head>

<body>

<div id="block-content">

	<h2 class="h2-title">Регистрация</h2>

	<form id="formRegistr" method="post" action="">
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

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

	<script type="text/javascript">//проверка ввода правильности полей формы регистрации
	$(document).ready(function(){
      $('form[id="formRegistr"]').validate({
			rules: {
					fname: {required: true,
							minlength: 3,
							maxlength: 15
							},
					lname: {required: true,
							minlength: 3,
							maxlength: 15
							},
					user_email: {
							required: true,
							email: true,
							},
					login: {
							required: true,
							minlength: 8,
							maxlength: 15	 
							},
					psword: {
							required: true,
							minlength: 8,
							maxlength: 15
	  
				}
			  },
					messages: {
								fname: {
									minlength: 'Имя не может быть меньше 3 символов',
									maxlength: 'Имя не может быть больше 15 символов',									
									},
								lname: {
									minlength: 'Фамилия не может быть меньше 3 символов',
									maxlength: 'Фамилия не может быть больше 15 символов',									
									},
								user_email: 'Укажите правильный email',
								login: {
								  minlength: 'Логин не может быть меньше 8 символов',
								  maxlength: 'Логин не может быть больше 15 символов',  
									},
								psword: {
								  minlength: 'Пароль не может быть меньше 8 символов',
								  maxlength: 'Пароль не может быть больше 15 символов',							  
									}
					},
					
				submitHandler: function(form) {
								form.submit();
								}
			});
		});  
	</script>


</html>

