<?php

    # Classe datetime:

    $dt = new DateTime(); # instanciando uma classe -> metodo construtor.

    $periodo = new DateInterval("P15D");

    $dt -> add($periodo); # Soma 15 dias do datetime;

    echo "<br>";

    echo $dt -> format("l, d/m/Y H:i:s");


?>