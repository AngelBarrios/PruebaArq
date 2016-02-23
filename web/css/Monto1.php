<?php
$a=$_POST['nom'];
echo "Información de ".$a;

echo "<form action=Monto2.php method=POST>";
        echo "<input type=hidden name=nom value=\"$a\">";
	echo "Numero de Tarjeta:<input type=text name=tar><br><br>";
	echo "Monto:<input type=text name=mon><br><br>";
	echo "<input type=submit value=Abonar><br><br>";
	
echo "</form>";
echo"<br>";

?> 