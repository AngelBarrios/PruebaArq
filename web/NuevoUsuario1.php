<body>
<?php
echo "<form action=NuevoUsuario2.php method=POST>";
	echo "<h1>Ingresa Datos del Nuevo Usuario</h1><br>";
	
	echo "Nombre:<input type=text name=nom><br><br>";
	echo "Contraseña:<input type=password name=con><br><br>";
	echo "Tipo de USUARIO<br>C=Cliente<br>T=Empleado<br>";
	echo"<select name=tipo>"; 
	
	echo "<option>t</option>";
	echo "<option>c</option>";
	echo"</select><br>"; 
	echo "<input type=submit value=Agregar><br><br>";
	
echo "</form>";
echo"<br>";
?>
</body>