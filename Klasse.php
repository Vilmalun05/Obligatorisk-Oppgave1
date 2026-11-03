<?php

$db=myqli_connect ("b-studentsql-1.usn.no", "vilun2545", "0732vilun2545", "vilun2545");

$sqlSetning = "SELECT * FROM Klasse";
$sqlResultat=mysqli_query($db,$sqlSetning);

$antallRader=mysqli_num_rows($sqlResultat);

for ($i=1; $i<=$antallRader; $i++) {
    $rad=mysqli_fetch_row($sqlResultat);
    $brukerklasse=$rad["brukernavn"];
    $fornavn=$rad["fornavn"];
    $etternavn=$rad["etternavn"];
    $klassekode=$rad["klassekode"];
}
print ($brukerklasse $fornavn $etternavn $klassekode ");

?>