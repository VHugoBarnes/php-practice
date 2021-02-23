<?php 

// Conectar a la base de datos
// Host, user, password, database
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

// Comprobar si la conexión es correcta
if(mysqli_connect_errno()) {
    echo "La conexión a la base de datos ha fallado: " . mysqli_connect_error();
} else {
    echo "Conexión realizada correctamente";
}

echo "<br>";
echo "<br>";

// Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)) {
    echo "<h1>".$nota['titulo']."</h1>";
    echo $nota['descripcion'];
    echo "<br>";
}

// Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Esto es una nota de PHP', 'green');";
$insert = mysqli_query($conexion, $sql);

if($insert) {
    echo "<h2>Datos insertados correctamente</h2>";
} else {
    echo "<h2>". mysqli_error($conexion) ."</h2>";
}
