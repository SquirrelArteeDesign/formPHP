<?php include('form.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
    <title>Formuláro PHP</title>
</head>
<body>

	<div class="container">
		<h2>Fomulário</h2>
	    <form id="form" method="post">
	    	<input class="w100" type="text" name="nome" placeholder="Nome..." />
	    	<input class="w50 left" type="email" name="email" placeholder="E-mail.."  >
	    	<input class="w50 right placeholder" type="text" name="telefone" placeholder="Telefone..."  />
	    	<input class="w100" type="text" name="assunto" placeholder="Assunto..."  />
	    	<textarea class="w100" name="message" value="message" placeholder="Mensagem..."  ></textarea>
	    	<input type="submit" name="acao" value="Enviar" />
	    </form>
    </div><!--container-->
    <div class="clear"></div><!--clear-->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script src="scripts/jquery.mask.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>