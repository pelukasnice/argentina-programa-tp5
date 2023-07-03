<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pruebas</title>
    <link rel="stylesheet" href= "css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Belanosima&family=Inter:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<h3>1. Crear la clase Persona con las siguientes propiedades: nombre, apellido,edad y los siguientes métodos:</h3>    
    <p>-setName, que debe permitir que la propiedad nombre represente su
    cadena de caracteres en minúscula. <br>
    -getName, debe mostrar la cadena de caracteres antes ingresada con la
    primer letra de cada palabra en mayúscula.</p><br>
    
  
<div class="form-container">
    <form action="ejercicio1.php" method="post">
        <label for="titulonombre">Nombre</label>
        <input type="text" name = "nombre"><br>

        <label for="tituloapellido">Apellido</label>
        <input type="text" name = "apellido"><br>

        <label for="titulodni">Edad</label>
        <input type="number" name="edad"><br>

        <input class="boton" type="submit"><br>
    </form>
</div>
<h3>2. Crear la clase Empleado y definir como atributos su nombre y sueldo. Como así
también un método inicializar que reciba como dato el nombre y sueldo. También
plantear un segundo método que imprima el nombre y un mensaje si debe o no
pagar impuestos (si el sueldo supera a 45.000 paga impuestos)</h3>

<div class="card">
    <form method = "post" action="ejercicio2.php">
        <label for="">Nombre:</label>
        <input type="text" name="nombre">
        <label for="">Sueldo:</label>
        <input type="number" name="sueldo">
        <input class="boton" type="submit">
    </form>
</div>

    <h3>3. Crear la clase CabeceraPagina que permita mostrar un título, indicarle si
queremos que aparezca centrado, a derecha o izquierda, además permitir definir
el color de fondo y de la fuente. Pasar los valores que cargaran los atributos
mediante un constructor.</h3>

<div class="form-container">
<form method="post" action="ejercicio3.php">
    <label for="tituloInput">Título:</label>
    <input type="text" name="tituloInput" id="tituloInput">
    <br>
    <label for="alineacionInput">Alineación:</label>
    <select class="select" name="alineacionInput" id="alineacionInput">
        <option value="left">Izquierda</option>
        <option value="center">Centro</option>
        <option value="right">Derecha</option>
    </select>
    <br>
    <label for="colorFondoInput">Color de Fondo:</label>
    <input type="color" name="colorFondoInput" id="colorFondoInput">
    <br>
    <label for="colorFuenteInput">Color de Fuente:</label>
    <input type="color" name="colorFuenteInput" id="colorFuenteInput">
    <br>
    <input class="boton" type="submit" value="Mostrar Cabecera">
</form>
</div>

<h3>4. Crear un programa que permita obtener 4 notas, el nombre del alumno y calcular
la nota final teniendo en cuenta los siguientes porcentajes.Nota: 1 -- 15%
Nota 2 -- 20% Nota:3 -- 25% Nota: 4 -- 40%</h3>

<div class="form_container card">
    <form method = "post" action="ejercicio4.php">
    <label for="">Alumno:</label>
    <input type="text" name ="nombre" require>
    <label for="">Nota 1:</label>
    <input type="number" name="nota1" require>
    <label for="">Nota 2:</label>
    <input type="number" name="nota2" require>
    <label for="">Nota 3:</label>
    <input type="number" name="nota3" require>
    <label for="">Nota 4:</label>
    <input type="number" name="nota4" require>
    <input type="submit" class="boton">
    </form>
</div>

<h3>5. Crear una clase llamada TelefonoCelular con las siguientes propiedades: marca,
color, sistema operativo, número, numerollamado, estado y haciendollamada.
Los métodos van a ser: hacerLlamada, terminarLlamada, apagarCelular y
encenderCelular.</h3>

<!-- <form action="ejercicio 5.php" method="post" class="form-container">
    <label for="">MARCA</label>
    <select class="select" name="marca" id="marca">
        <option value="Motorola">Motorola</option>
        <option value="Samsung">Samsung</option>
        <option value="Apple">iPhone</option>
        <option value="Huawei">Huawei</option>

    </select>
    <label for="">COLOR</label>
    <select class="select" name="color" id="color">
        <option value="azul">Azul</option>
        <option value="negro">Negor</option>
    </select>

    <label for="">SISTEMA OPERATIVO</label>
    <select class="select" name="sistemaOperativo" id="alineacionInput">
        <option value="Android">Android</option>
        <option value="ios">Ios</option>
    </select>

    <label for="">NUMERO CELULAR</label>
    <input type="text" name="numero">

    <input type="submit" class="boton">
    
</form>  
 
NO ME DIO EL TIEMPO PARA HACERLO A TRAVEZ DE INPUT
-->
<div class="form-container">
<form action="" class="ultimo">
<a href="ejercicio5.php" class="boton ">mostrar</a>
</form>
</div>



    
</body>
</html>