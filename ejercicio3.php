<?php
class CabeceraPagina {
    private $titulo;
    private $alineacion;
    private $colorFondo;
    private $colorFuente;

    public function __construct($titulo, $alineacion, $colorFondo, $colorFuente) {
        $this->titulo = $titulo;
        $this->alineacion = $alineacion;
        $this->colorFondo = $colorFondo;
        $this->colorFuente = $colorFuente;
    }

    public function mostrar() {
        echo "<header style='background-color: {$this->colorFondo}; color: {$this->colorFuente}; text-align: {$this->alineacion};'>";
        echo "<h1>{$this->titulo}</h1>";
        echo "</header>";
    }
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = $_POST["tituloInput"];
    $alineacion = $_POST["alineacionInput"];
    $colorFondo = $_POST["colorFondoInput"];
    $colorFuente = $_POST["colorFuenteInput"];

    $cabecera = new CabeceraPagina($titulo, $alineacion, $colorFondo, $colorFuente);
    $cabecera->mostrar();
}

?>

<a href="index.php" class="boton">Volver al inicio</a>