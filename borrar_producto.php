<?php
// Conexión a la base de datos (debes completar con tus propios datos)
$servername = "data.clmw8oaaetcl.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "12345678";
$dbname = "datanombre";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
 
// Recibir ID del producto a borrar
$idBorrar = $_POST['id-borrar'];
 
// Borrar producto de la base de datos
$sql = "DELETE FROM tablanombre WHERE id=$idBorrar";
 
if ($conn->query($sql) === TRUE) {
    echo "Producto borrado correctamente";
} else {
    echo "Error al borrar producto: " . $conn->error;
}
 
$conn->close();
?>
