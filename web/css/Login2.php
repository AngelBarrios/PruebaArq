<?php 
$user= $_POST['nom'];
$pass= $_POST['contra'];
//valores enviados por index.php
?>
<p>comprobacion</p>
<p>usuario:
<?php
 echo $user;
 ?>
 </p>
<p>resultado de la comprobacion:</p>
<?php 
//Coneccion al server
$c=mysql_connect("mysql.hostinger.mx","u799946858_angel","uaeh1285") or die("Error al intentar conectar el servidor.");
mysql_select_db("u799946858_angel",$c);
$sql= "SELECT * FROM Usuario WHERE (Nombre LIKE '$user') AND (Contrasena LIKE '$pass')";
$resultado = mysql_query($sql,$c)or die ("Error");
//NUMERAMOS LAS POSIBLES FILAS COMO RESULTADO ALA CONSULTA

$filas=mysql_num_rows($resultado);

if($filas>=1)
{

while($arr=@mysql_fetch_array($resultado))

{
//  despues de arr va el nombre del campo, no de alguna variable
switch ($arr['Tipo']) { 
    case "t":
       echo 'Hora de Trabajar ';
echo "<a href=MenuTrabajador.php><center><h1>Avanzar</h1></a>";
        break;
    case "c":
      echo 'Bienvenido al portal estimado usuario';
     echo "<form action=MenuCliente1.php method=POST>";
	echo "Nombre:<input type=hidden name=nom value=$user><br><br>";	
	echo "<input type=submit value=\"Ir\">";
echo "</form>";

        break;
    
        
       
}}}
 else
{
  echo 'Usuario Invalido';
  echo "<a href=Login1.php><center><h1>volver a intentar</h1></a>";
}
?>
</body>
</html>