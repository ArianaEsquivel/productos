<?php
$listJ = file_get_contents("lista.json");
$lista = json_decode($listJ, true);

foreach ($lista as $obj) 
{
    if($obj["categoria"] == "Navideños" && strpos($obj["nombre"], "ero") !== false)
    {
        echo "<li>".$obj['id']."</li>";
        echo "\n";
        echo "<li>".$obj['nombre']."</li>";
        echo "\n";
        echo "<li>".$obj['categoria']."</li>";
        echo "\n";
        echo "<li>".$obj['precio']."</li>";
        echo "\n";
    }
    
}
    
?>
