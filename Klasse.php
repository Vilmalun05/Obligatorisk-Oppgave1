<?php

$db = mysqli_connect(
    "b-studentsql-1.usn.no",
    "vilun2545",
    "0732vilun2545",
    "vilun2545"
);

$sqlSetning = "SELECT * FROM klasse";

$sqlResultat = mysqli_query($db, $sqlSetning);

$antallRader = mysqli_num_rows($sqlResultat);

for ($i = 1; $i <= $antallRader; $i++) {

    $rad = mysqli_fetch_assoc($sqlResultat);

    $brukernavn = $rad["brukernavn"];
    $fornavn = $rad["fornavn"];
    $etternavn = $rad["etternavn"];
    $klassekode = $rad["klassekode"];

    echo "$fornavn $etternavn ($klassekode)<br>";
}

?>