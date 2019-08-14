<?php 

    # setLocale:

    # windows & linux: são diferentes -> win: portuguese, lin: pt_BR.utf-8.

    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

    echo ucwords(strftime("%A %B"));

    echo "<br>";

    echo setlocale(LC_ALL, 0);
?>