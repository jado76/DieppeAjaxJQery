<?php
header("Content-Type: text/plain");

$toto = isset($_GET['parametre1']) ? $_GET['parametre1'] : "";
$toto2 = isset($_GET['parametre2']) ? $_GET['parametre2'] : "";

if($toto != "" && $toto2 != "") {
    echo "Yessssssssssssss !!!!!!!!!!!!";
}
else {
    echo "Boulay !";
}