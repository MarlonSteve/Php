<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="">
        <p>Usuario: <input type="text" name="usuario"></p>
        <p>Contraseña: <input type="password" name="contrasena"></p>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <br>
    <br>

    <h2>Registro</h2>
    <form method="POST" action="">
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>DNI: <input type="text" name="dni"></p>
        <p>Género: <input type="text" name="genero"></p>
        <p>Edad: <input type="text" name="edad"></p>
        <p>Estatura: <input type="text" name="estatura"></p>
        <p>Peso: <input type="text" name="peso"></p>
        <p>Fumador (si/no): <input type="text" name="fumador"></p>
        <input type="submit" value="Registrar">
    </form>
<br>
<br>
    <h2>Búsqueda</h2>
    <form method="POST" action="">
        <p>Buscar por Nombre o DNI: <input type="text" name="busqueda"></p>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
<?php
$usuario= "Marlonsteve";
$contraseña=1083872763;

$userverific=strval(readline("Ingrese su usuario <br>"));
$contraverific=strval(readline("Ingrese su contraseña "));

if($userverific == $usuario and $contraverific==$contraseña){
    echo "inicio de sesion exitoso  \n";
    $nombre= strval(readline("Ingrese su nombre "));
     $dni= intval(readline("Ingrese su DNI "));
     $genero= strval(readline("Ingrese su genero "));
     $edad= intval(readline("Ingrese su edad "));
     $estatura= floatval(readline("Ingrese su estatura "));
     $peso= floatval(readline("Ingrese su peso "));
     $fumador= strval(readline("¿Es fumador? si/no "));
    $busquedanom= strval(readline("Ingrese nombre para buscar "));
    $busquedacont= intval(readline("Ingrese DNI para buscar "));

        if($busquedanom == $nombre || $busquedacont == $dni){
          echo "La persona que busca tiene $edad años y es del genero $genero ";
    
        }
        else{
            echo "la persona  no esta registrada ";
        }
}
