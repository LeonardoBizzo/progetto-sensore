<?php
if (isset($_POST["datiSensore"])) {
    $sql = new mysqli("172.17.0.2:3306", "root", "root", "DatiSensore") or die("Connection error:" . $sql->error);
    $sql->query("INSERT INTO `Valori`(`num_persone`, `timestamp_lettura`) VALUES ('1','".date("Y-m-d H:i:s")."')");

    $sql->close();
}
?>
