<?php


$db=mysqli_connect ("b-studentsql-1.usn.no", "vilun2545", "0732vilun2545", "vilun2545");

/*$sqlSetning = "INSERT INTO `klasse`(`brukernavn`, `fornavn`, `etternavn`, `klassekode`) VALUES ('IT1','Informasjonsteknologi 1', 'Student', 'IT1')";*/
$sqlSetning = "SELECT * FROM klasse";
$sqlResultat = mysqli_query($db,$sqlSetning) or die ("ikke mulig å hente data fra databasen");

$antallRader = mysqli_num_rows($sqlResultat);

for ($i = 1; $i <= $antallRader; $i++) {
    $rad=mysqli_fetch_array($sqlResultat);
    $brukernavn=$rad["brukernavn"];
    $fornavn=$rad["fornavn"];
    $etternavn=$rad["etternavn"];
    $klassekode=$rad["klassekode"];


    print(" $brukernavn $fornavn $etternavn $klassekode ");
}

?>