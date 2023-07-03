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
    class Empleado{
        private $nombre;
        private $sueldo;

        public function inicializar($nombre,$sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        }

        public function verificar(){
            echo "Nombre:" . $this->nombre . "<br>";
            if ($this->sueldo > 45000){
                echo "Debe pagar impuestos";
            }else
                echo"No debe pagar impuestos";
        }        
        
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nombre = $_POST['nombre'];
        $sueldo = $_POST['sueldo'];

        $empleado = new Empleado();
        echo "<div class='persona_container card'>";
        $empleado->inicializar($nombre, $sueldo);
        echo $empleado->verificar();
        echo "<div>";
    }  
    
    ?>
    <a href="index.php" class="boton">Volver al inicio</a>
    
</body>
</html>