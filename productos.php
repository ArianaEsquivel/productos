<?php
private $listP = [];
$listP = [
    {
        $id = 1;
        $categoria = "Navideños";
        $nombre = "Obeja para sendero";
        $precio = 300;
    },
    {
        $id = 2;
        $categoria = "Muebles";
        $nombre = "Ropero";
        $precio = 500;
    },
    {
        $id = 3;
        $categoria = "Escolar";
        $nombre = "Lapicero";
        $precio = 80;
    },
    {
        $id = 4;
        $categoria = "Navideños";
        $nombre = "Sombrero";
        $precio = 220;
    },
    {
        $id = 5;
        $categoria = "Navideños";
        $nombre = "Árbol decorativo";
        $precio = 600;
    },
    {
        $id = 6;
        $categoria = "Navideños";
        $nombre = "Tablero de uno";
        $precio = 210;
    },
]

    foreach ($listP as $obj) 
    {
        $resultado = $fila->cantidad;
        $tel = $fila->telefono;
        $co = $fila->correo;
        if($obj->categoria == "Navideños" && strpos($obj->nombre, "ero") === true && $obj->precio > 200 &&  $obj->precio < 400 )
        {
            echo $obj->id;
            echo $obj->nombre;
            echo $obj->categoria;
            echo $obj->precio;
        }
    }
    

?>
