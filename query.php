

 
<?php


 var_dump($_POST);



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

