<?php
if (is_null($_POST["data"])) {
    $sql = new mysqli("localhost:3306", "root", "", "DatiSensore") or die("Connection error:" . $sql->error);
    $result = $sql->query("SELECT * FROM `Valori`");

    while ($row = $result->fetch_assoc()) {
        print_r($row);
    }

    $sql->close();
}
?>
