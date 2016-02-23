<?php
$a=$_POST['nom'];
$b=$_POST['tar'];

$c=mysql_connect("mysql.hostinger.mx","u799946858_angel","uaeh1285") or die("Error al intentar conectar el servidor.");
mysql_select_db("u799946858_angel",$c);
if(strcmp($b,"")!=0 &&  strcmp($b,"")!=0){
$s=mysql_query("insert into `{$a}` (Tarjeta, Monto)
values ('{$b}', '{$_POST['mon']}')",$c) or die(mysql_error());
echo "Registro Almacenado Correctamente";
echo "<form action=MenuTrabajador.php method=POST>";	
	echo "<input type=hidden name=nom value=\"$a\">";
	echo "<input type=submit value=\"Volver al menú principal\"><br><br>";	
	echo "</form>";	
}	
else{
echo "Debe tener una tarjeta y un monto";
echo "<form action=Monto1.php method=POST>";
 echo "<input type=text name=nom value=\"$a\">";	
	echo "<input type=submit value=Inicio>";
echo "</form>";
}	
?> 