<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <link rel="stylesheet" href="css/styles.css"> -->
</head>
<body>

<?php
class Persona {
    private $nombre;
    private $apellido;
    private $edad;

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function __toString() {
        return "Nombre: " . $this->nombre . "<br>Apellido: " . $this->apellido . "<br>Edad: " . $this->edad . "<br>";
    }

    public function setName() {
        return strtolower($this->nombre);
    }
    public function getName() {
        return ucwords(strtolower($this->nombre));
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $persona1 = new Persona($nombre, $apellido, $edad);
    echo "<div class='persona_container card'>";
    echo $persona1->__toString();
    echo "<br>";
    echo "El método setName() devuelve: " . $persona1->setName() . "<br>";
    echo "El método getName() devuelve: " . $persona1->getName() . "<br>"; 
    echo "</div>";   


}
?>

<a href="index.php" class="boton">Volver al inicio</a>
    
</body>
</html>
