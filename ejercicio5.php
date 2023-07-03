<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class TelefonoCelular {
    private $marca;
    private $color;
    private $sistema_operativo;
    private $numero;
    private $numerollamado = "";
    private $estado = "Encendido";
    private $haciendollamada = false;
    
    public function __construct($marca, $color, $sistema_operativo, $numero) {
        $this->marca = $marca;
        $this->color = $color;
        $this->sistema_operativo = $sistema_operativo;
        $this->numero = $numero;
    }
    
    public function hacerLlamada($numerollamado) {
        if ($this->estado == "Encendido" && !$this->haciendollamada) {
            $this->numerollamado = $numerollamado;
            $this->haciendollamada = true;
            echo "Llamando al número $this->numerollamado...<br>";
        } elseif ($this->estado == "Apagado") {
            echo "El celular está apagado. Enciéndelo para realizar una llamada.<br>";
        } elseif ($this->haciendollamada) {
            echo "Ya se encuentra en una llamada. Termina la llamada actual para realizar otra.<br>";
        }
    }
    
    public function terminarLlamada() {
        if ($this->haciendollamada) {
            $this->numerollamado = "";
            $this->haciendollamada = false;
            echo "Llamada terminada.<br>";
        } else {
            echo "No hay ninguna llamada en curso.<br>";
        }
    }
    
    public function apagarCelular() {
        if ($this->estado == "Encendido") {
            $this->estado = "Apagado";
            $this->numerollamado = "";
            $this->haciendollamada = false;
            echo "El celular se ha apagado.<br>";
        } else {
            echo "El celular ya está apagado.<br>";
        }
    }
    
    public function encenderCelular() {
        if ($this->estado == "Apagado") {
            $this->estado = "Encendido";
            echo "El celular se ha encendido.<br>";
        } else {
            echo "El celular ya está encendido.<br>";
        }
    }
    
    public function imprimirEstado() {
        echo "Marca: $this->marca<br>";
        echo "Color: $this->color<br>";
        echo "Sistema Operativo: $this->sistema_operativo<br>";
        echo "Número: $this->numero<br>";
        echo "Número Llamado: $this->numerollamado<br>";
        echo "Estado: $this->estado<br>";
        echo "Haciendo Llamada: " . ($this->haciendollamada ? "Sí" : "No") . "<br>";
    }
}

// Crear objetos de TelefonoCelular
$celular1 = new TelefonoCelular("Samsung", "Negro", "Android", "123456789");
$celular2 = new TelefonoCelular("Apple", "Azul", "iPhone", "987654321");

// Imprimir el estado de los dos objetos
echo "Estado de celular1:<br>";
$celular1->imprimirEstado();
?>

<a href="index.php" class="boton">Volver al inicio</a>







    
</body>
</html>