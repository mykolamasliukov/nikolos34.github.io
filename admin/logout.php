<?php 
# проверка авторизации
if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) 
{    

	
	setcookie('id', '', time() - 60*60*24*30); 
	setcookie('hash', '', time() - 60*60*24*30);
	header('Location: login.php'); exit();

} 
else 
{ 
  setcookie('errors', '2', time() + 60*24*30*12);
  header('Location: login.php'); exit();
}
