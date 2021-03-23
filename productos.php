<?php
$listJ = file_get_contents("lista.json");
$lista = json_decode($listJ, true);

foreach ($lista as $obj) 
{
    if($obj["categoria"] == "Navideños" && strpos($obj["nombre"], "ero") !== false)
    {
        echo "<li>ID producto".$obj['id']."</li>"
            echo "<ul>"
            echo "<li>id: ".$obj['id']."</li>";
            echo "<li>Categoría: ".$obj['categoria']."</li>";
            echo "<li>Nombre: ".$obj['nombre']."</li>";
            echo "<li>Precio: $".$obj['precio']."</li>";
            echo "</ul>"
    }
    
}
    
?>
