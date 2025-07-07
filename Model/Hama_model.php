<?php
// Models/HamaModel.php
require_once 'KoneksiDB.php';

function getAllHama($connection) {
    $query = "SELECT * FROM hama";
    $result = mysqli_query($connection, $query);

    $dataHama = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $dataHama[] = $row;
    }

    return $dataHama;
}
?>
