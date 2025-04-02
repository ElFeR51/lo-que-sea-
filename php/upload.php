/* upload.php */
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];
    $password = $_POST["password"];

    $contraseña_correcta = "claveSegura";
    if ($password !== $contraseña_correcta) {
        die("Contraseña incorrecta. No puedes subir el archivo.");
    }

    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $archivo_nombre = basename($_FILES["file"]["name"]);
        $directorio_destino = "../uploads/" . $archivo_nombre;

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $directorio_destino)) {
            echo "El archivo se ha subido correctamente.";
        } else {
            echo "Error al subir el archivo.";
        }
    } else {
        echo "No se ha seleccionado ningún archivo o hubo un error.";
    }
}
?>
