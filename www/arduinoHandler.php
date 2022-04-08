<?php
if (isset($_POST["datiSensore"])) {
    $sql = new mysqli("localhost:3306", "root", "", "DatiSensore") or die("Connection error:" . $sql->error);
    $sql->query("INSERT INTO `Valori`(`num_persone`, `timestamp_lettura`) VALUES ('1','".date("Y-m-d H:i:s")."')");

    $sql->close();
}
?>
