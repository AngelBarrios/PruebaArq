<?php
$a=$_POST['nom'];
$b=$_POST['con'];
$c=mysql_connect("mysql.hostinger.mx","u799946858_angel","uaeh1285") or die("Error al intentar conectar el servidor.");
mysql_select_db("u799946858_angel",$c);
if(strcmp($a,"")!=0 &&  strcmp($b,"")!=0){
$s=mysql_query("insert into Usuario (Nombre, Contrasena, Tipo)
values ('{$a}', '{$b}','{$_POST['tipo']}')",$c) or die(mysql_error());
$t=mysql_query("create table `{$a}` (Tarjeta int(10), Monto int(10))",$c) or die(mysql_error());


echo "Registro Almacenado Correctamente";
echo "<form action=Monto1.php method=POST>";	
	echo "<input type=hidden name=nom value=\"$a\">";
	echo "<input type=submit value=\"Ingresar Monto\"><br><br>";	
	echo "</form>";	
}	
else{
echo "No puedes Registrar pones el usuario y la contraseña";
echo "<form action=Login.php method=POST>";	
	echo "<input type=submit value=Inicio>";
echo "</form>";
}	
?> 