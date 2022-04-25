<?php
$sql = new mysqli("172.17.0.1:3306", "root", "root", "DatiSensore") or die("Connection error:" . $sql->error);

$result = $sql->query("SELECT num_persone, timestamp_lettura FROM `Valori` having hour(timestamp_lettura)=" . date("H") . " and day(timestamp_lettura)=" . date("d") . " and month(timestamp_lettura)=" . date("m") . " and year(timestamp_lettura)=" . date("Y"));

echo '<div class="alert alert-primary" role="alert">Nell\'ultima ora sono state rilevate ' . $result->num_rows . ' persone!</div>';
while ($row = $result->fetch_assoc()) {
    echo "
<div class=\"card\" style=\"width: 18rem; margin:10px; padding:10px\">
    <img src=\"avatar.jpg\" class=\"card-img-top\">
    <div class=\"card-body\">
        <p class=\"card-text\">Avatar registrato {$row["timestamp_lettura"]}</p>
    </div>
</div>
";
}

$sql->close();
