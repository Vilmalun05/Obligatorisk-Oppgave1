<?php
$db = mysqli_connect("b-studentsql-1.usn.no", "vilun2545", "0732vilun2545", "vilun2545");

$sqlsetning = "SELECT * FROM Student";
$sqlResultat = mysqli_query($db,$sqlsetning);

$antallRader = mysqli_num_rows($sqlResultat);
?>

