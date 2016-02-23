<body>
<?php

//Esta parte hace consultas de las tablas
$c=mysql_connect("mysql.hostinger.mx","u799946858_angel","uaeh1285") or die("Error al intentar conectar el servidor.");
mysql_select_db("u799946858_angel",$c);
$a=$_POST['nom'];

$r=mysql_query("select * from {$a}",$c);
echo"<center><table border=1 width=800>";
echo"<tr>";
echo "<h3>Tarjetas de $a</h><br><br>";
echo"<th width=200>Numero de Tarjeta </th>";
echo"<th width=200>Saldo</th>";
echo"</tr>";
while ($arr=mysql_fetch_array($r))
{
echo"<tr>";
echo "<td>".$arr['Tarjeta'];
echo "<td>{$arr['Monto']}";
echo"</td>";
echo"</tr>";
}
echo"</table><br><br>";
echo "</center><br>";


//Hacer una transferencia
echo "<form action=Transferencia3.php method=POST>";
	echo "<input type=hidden name=nom value=\"$a\">";	
	echo "<input type=submit value=\"Transferir saldos\">";
echo "</form>";
echo "<form action=Login1.php method=POST>";

echo"<input type=submit value=\"Cerrar Sesión\">";
echo"</form>";

?>