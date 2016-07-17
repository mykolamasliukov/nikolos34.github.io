<?php

include('check.php');

$file = 'leadvertex.txt';
if(isset($_POST['code']))
{
	$result = file_put_contents($file, $_POST['code']);
	
}

	$content = file_get_contents($file);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Панель администратора</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Панель администратора</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Главная</a></li>
            <li><a href="eautopay.php">E-autopay</a></li>
            <li><a href="google.php">Google Analytics</a></li>
            <li><a href="yandex.php">Яндекс.метрика</a></li>
            <li><a href="clickfrog.php">Click<span style="font-style:italic;">frog</span></a></li>
            <li class="active"><a href="leadvertex.php">BotScanner</a></li>
            
          </ul>
		  <ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php" onclick="return confirm('Вы точно хотите выйти ?')">Выйти</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>BotScanner</h1>
<?php if(isset($result) && $result !== false): ?>
<div class="alert alert-success" role="alert">Запись успешно обновлена</div>
	<?php endif; ?>			
        <form method="post" action="" role="form">
		 <div class="form-group">
			<label for="exampleInputEmail1">Введите код BotScanner</label>
			<textarea class="form-control" rows="5" name="code"><?php echo $content; ?></textarea>
		  </div>

		  <button type="submit" class="btn btn-default">Сохранить</button>
				  
				
		</form>
        
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
