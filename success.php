<?
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['address'])) {$mail = $_POST['address'];}
if (isset($_POST['cvet'])) {$cvet = $_POST['cvet'];}


$address = 'google.com';
$sub = "заявка с сайта $adres";
$mes = "Автор назвался: $name\nномер телефона: $phone\nуказал майл: $mail\nуказал цвет: $cvet";
$verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$address");

if ($verify=true) {
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
    <title>ЭЛИТНЫЕ МУЖСКИЕ ЧАСЫ
CURREN LUXARY
ПОПУЛЯРНЫЕ ЧАСЫ
С ДОСТАВКОЙ ПО РОССИИ</title>
        <meta name="description" content="">	
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/reset.css">
		<script>
			var delay = 5000; //Your delay in milliseconds
			setTimeout(function(){ window.location = "index.php"; }, delay);
		</script>		
    </head>
    <body>		
		<div id="send">
			<img src="blag.jpg">
		</div>	
	</body>
</html>	

<?}?>