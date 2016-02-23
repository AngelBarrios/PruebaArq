<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registro</title>
  <link rel="stylesheet" href="css/style1.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Ingresa a tu cuenta</h1>
      
        
       
        <?php

echo "<form action=Login2.php method=POST>";
	echo "</h1>";
	 echo 'Usuario';
	echo "<p><input type=text name=nom ></p>";
	 echo 'Contraseña';
	echo " <p><input type=password name=contra ></p>";
	echo " <p class=submit><input type=submit value=Entrar></p>";
echo "</form>";


?>
<br>
 <a href=home.html><center><h1>Volver al menú principal</h1></a>    
     
    </div>
  </section>
</body>
</html>