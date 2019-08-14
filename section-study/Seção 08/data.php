<?php

    # Usando Função date() e função Time()

     echo date("d/m/Y H:i:s", 1565385588); 
     
    # É necessário um único parâmetro.

    # O setLocale sempre traz o valor do tempo do servidor.

    # Caso o valor do time(), seja inserido no date(), Ás horas serão fixadas.

     /*
        minus. -> representa o dia/mes/ano normal
        maius. -> representa o dia/mes/ano completo.

        d -> dia
        m -> mes
        y -> anos

        H -> horas
        i-> minutos
        s: segundos
     */

    echo "<br>"; 

    echo time(); # Total de segundo des de 01 de janeiro de 1970.




?>