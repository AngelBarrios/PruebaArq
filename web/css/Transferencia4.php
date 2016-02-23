<?php
$a=$_POST['nom'];
$b=$_POST['tar1'];
$b1=$_POST['tar2'];
$d=$_POST['mon'];
$J=true;
if(strcmp($d,"")==0)
{
echo "Debes tener una cantidad arriba de 0 a transferir";
}
else
{
echo "<br>";
echo "Tarjeta de pago: ";
echo "$b <br>";
echo "Tarjeta para recibir: ";
echo "$b1 <br>";
echo "cantidad : ";
echo "$d <br>";
$c=mysql_connect("mysql.hostinger.mx","u799946858_angel","uaeh1285") or die("Error al intentar conectar el servidor.");
mysql_select_db("u799946858_angel",$c);
$f=mysql_query("Select Monto from `{$a}` where Tarjeta={$b}",$c)or die("error1");


$r=mysql_query("update `{$a}` set Monto=Monto+{$d} where Tarjeta like '%$b1%'",$c)or die("error6");
$s=mysql_query("update `{$a}` set Monto=Monto-{$d} where Tarjeta like '%$b%'",$c)or die("error6");


}

?>

<?php

echo "<form action=MenuCliente1.php method=POST>";
echo "<input type=hidden name=nom value=\"$a\">";
echo"<input type=submit value=\"Regresar al Menu\">";
echo"</form>";
echo "<form action=Login1.php method=POST>";

echo"<input type=submit value=\"Cerrar Sesión\">";
echo"</form>";

?>