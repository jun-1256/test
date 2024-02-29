<?php

function shikaku($tate,$yoko){
    $xyz = $tate*$yoko;
    return $xyz;
}

echo shikaku(3,5);
echo "<br>";
echo shikaku(5,10);
echo "<br>";
echo shikaku(7,3);
echo "<br>";

?>