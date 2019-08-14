<?php

    $ts = strtotime('now'); #timeStamp, now: agora, +1 day: outro dia, +2 week: duas semanas e assim sucessivamente.

    echo date('l, d/m/Y', $ts); #tranforma o timeStamp em uma data normal.
    
?>