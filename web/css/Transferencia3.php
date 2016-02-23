<body>
<?php
$c=mysql_connect("mysql.hostinger.mx","u799946858_angel","uaeh1285") or die("Error al intentar conectar el servidor.");
mysql_select_db("u799946858_angel",$c);
$a=$_POST['nom'];
echo "<form action=Transferencia4.php method=POST>";	

$sql="SELECT Tarjeta FROM `{$a}`"; 
$result=mysql_query($sql); 
$result2=mysql_query($sql); 
$i=0; 
echo"Tarjeta para pagar<br>";
echo'<select name=tar1>'; 
while ($row=mysql_fetch_array($result)) 
{ 
echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
} 
echo '</select>';
echo "<br>"; 
echo"Cantidad a Transferir<br>";
echo "<input type=text name=mon>";	
echo "<br>"; 
echo"Tarjeta para recibir<br>";
echo'<select name=tar2>'; 
while ($row2=mysql_fetch_array($result2)) 
{ 
echo "<option value=".$row2[$i].">".$row2[$i]."</option>\n"; 
} 
echo '</select>';
echo "<br>"; 
echo "<input type=hidden name=nom value=\"$a\">";
echo "<input type=submit value=Continuar><br><br>";	
echo "</form>";	



?>
</body>