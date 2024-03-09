<?php
	echo "Hola <b> {$_POST['nombre']} {$_POST['Apaterno']} {$_POST['Amaterno']}</b> Un gusto saludarte <br>";

	echo "Usuario: {$_POST['usuario']},{$_POST['contraseña']}, Fecha de nacimiento {$_POST['Fnac']}<br>";

	echo "Pais: {$_POST['pais']}, Ciudad: {$_POST['Ciudad']}, Calle: {$_POST['Calle']}<br>";

	echo "Número Exterior: {$_POST['numE']}, Colonia: {$_POST['Colonia']},<br> E-mail: {$_POST['E-mail']}, R.F.C: {$_POST['RFC']}, Codigo Postal: {$_POST['CP']}";
?>