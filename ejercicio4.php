<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <title>Document</title>
</head>

<body>
    
    <?php
    class Alumno {
        private $nombreAlumno;
        private $nota1;
        private $nota2;
        private $nota3;
        private $nota4;
        private $notaFinal;
    
        public function __construct($nombreAlumno, $nota1, $nota2, $nota3, $nota4) {
            $this->nombreAlumno = $nombreAlumno;
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
            $this->nota3 = $nota3;
            $this->nota4 = $nota4;
        }
    
        public function calcularNotaFinal() {
            $notaFinal = ($this->nota1 * 0.15) + ($this->nota2 * 0.20) + ($this->nota3 * 0.25) + ($this->nota4 * 0.40);
            $this->notaFinal = $notaFinal;
        }
    
        public function getNotaFinal() {
            return $this->notaFinal;
        }
    
        public function imprimirObjeto() {
            return "Nombre: " . $this->nombreAlumno . "<br>Nota 1: " . $this->nota1 . "<br>Nota 2: " . $this->nota2 . "<br>Nota 3: " . $this->nota3 . "<br>Nota 4: " . $this->nota4 . "<br>Nota Final: " . $this->notaFinal;
        }
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombreAlumno = $_POST['nombre'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
    
        $alumno = new Alumno($nombreAlumno, $nota1, $nota2, $nota3, $nota4);
        $alumno->calcularNotaFinal();
        echo "<div class='persona_container card'>";
        echo $alumno->imprimirObjeto();
        echo "</div>";
        echo "<button class='boton' type='submit'>Enviar</button>";
    }
    ?>

<a href="index.php" class="boton">Volver al inicio</a>
</body>
</html>
