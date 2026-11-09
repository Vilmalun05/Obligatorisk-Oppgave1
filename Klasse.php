<?php
include("db-kobling.php");
?>

<h1>Registrer klasse</h1>
<form method="post" action="klasse.php" id="registrerKlasse" name="registrerKlasse">
<input type="text" name="brukernavn" id="Brukernavn">
<input type="text" name="fornavn" id="Fornavn">
<input type="text" name="etternavn" id="Etternavn">
<input type="text" name="klassekode" id="Klassekode">
<input type="submit" value="Registrer klasse" id="registrerKlasseKnapp" name="registrerKlasseKnapp">
<input type="reset" value="Nullstill" id="nullstillKnapp" name="nullstillKnapp"/> <br />
</form>

<?php 
if (isset($_POST["registrerKlasseKnapp"])) {
    $brukernavn = $_POST["brukernavn"];
    $fornavn = $_POST["fornavn"];
    $etternavn = $_POST["etternavn"];
    $klassekode = $_POST["klassekode"];
}
    if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode) {
        print("Alle felt må fylles ut");
    } else {
        $sqlSetning = "INSERT INTO `klasse`(`brukernavn`, `fornavn`, `etternavn`, `klassekode`) VALUES ('$brukernavn','$fornavn', '$etternavn', '$klassekode')";
        mysqli_query($db,$sqlSetning) or die ("ikke mulig å registrere data i databasen");
        print("Følgende klasse er nå registrert: <br> $brukernavn $fornavn $etternavn $klassekode");
    }
    


/*$sqlSetning = "INSERT INTO `klasse`(`brukernavn`, `fornavn`, `etternavn`, `klassekode`) VALUES ('IT1','Informasjonsteknologi 1', 'Student', 'IT1')";*/
$sqlSetning = "SELECT * FROM klasse";
$sqlResultat = mysqli_query($db,$sqlSetning) or die ("ikke mulig å hente data fra databasen");
$antallRader = mysqli_num_rows($sqlResultat);

if 
($antallRader != 0) 
{ 
    print("klasse $klassekode er registrert i databasen fra før <br>");
}
else 
    
{
   $sqlSetning = "INSERT INTO `klasse`(`brukernavn`, `fornavn`, `etternavn`, `klassekode`) VALUES ('$brukernavn','$fornavn', '$etternavn', '$klassekode')";
   mysqli_query($db,$sqlSetning) or die ("ikke mulig å registrere data i databasen");

   print("Følgende klasse er nå registrert: <br> $brukernavn $fornavn $etternavn $klassekode");
}
?>