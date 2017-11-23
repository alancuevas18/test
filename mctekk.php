<?php


function arbol( $padre, $nivel ){
    $conexion = new PDO("mysql:host=localhost;dbname=test","root","");
    $nivel++;
    $consulta = $conexion->query("SELECT * FROM items where gerarquia ='$padre' " );
     while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){
        echo str_pad($fila["name"], strlen($fila["name"])+($nivel-1), "-", STR_PAD_LEFT). "<br />";
        arbol( $fila["id"], $nivel );


    }
}
$nivel = 0; //para contar los guiones segun el nivel
arbol( 0, $nivel ); //funcion para reinvocar 	
?>

