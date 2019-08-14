<?php

# O que programar no config.

spl_autoload_register(function($nameClass){
    # Constante DIRECTORY_SEPARATO -> ajuda no uso de código em várias plataformas.

    var_dump($nameClass);

    $dir_class = "class"; 
    $filename = $dir_class . DIRECTORY_SEPARATOR . $nameClass . ".php"; # Referece a todo o PATH do arquivo.

    if (file_exists($filename)) { # Pode deixar assim!
        
        require_once($filename);

    }

});


?>