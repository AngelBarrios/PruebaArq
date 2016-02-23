<body>
<?php
$c=mysql_connect("mysql.hostinger.mx","u799946858_angel","uaeh1285") or die("Error al intentar conectar el servidor.");
mysql_select_db("u799946858_angel",$c);
$a=$_POST['nom'];
echo "<form action=Deposito2.php method=POST>";	

$sql="SELECT Tarjeta FROM `{$a}`"; 
$result=mysql_query($sql); 
$result2=mysql_query($sql); 
$i=0; 
echo"Depositar a la tarjeta<br>";
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
echo "<br>"; 
echo "<input type=hidden name=nom value=\"$a\">";
echo "<input type=submit value=Continuar><br><br>";	
echo "</form>";	



?>
</body>