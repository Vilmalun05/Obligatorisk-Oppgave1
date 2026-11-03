<?php

$db = mysqli_connect(
    "b-studentsql-1.usn.no",
    "vilun2545",
    "0732vilun2545",
    "vilun2545"
);


$sqlsetning = "SELECT * FROM klasse";

$sqlResultat = mysqli_query($db,$sqlsetning);

$antallrader = mysqli_num_rows($sqlresultat);

for ($i = 1; $i <= $antallrader; $i++) {

    $rad = mysqli_fetch_array($sqlresultat);

    $brukernavn = $rad["brukernavn"];
    $fornavn = $rad["fornavn"];
    $etternavn = $rad["etternavn"];
    $klassekode = $rad["klassekode"];

    echo "$fornavn $etternavn ($klassekode)<br>";
    /* print(" $fornavn $etternavn ($klassekode)<br>"); */
}

?>