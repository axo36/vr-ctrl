<?php
$data = [
    "date" => $_POST["date"],
    "heure" => $_POST["heure"],
    "duree" => $_POST["duree"]
];

file_put_contents("data.json", json_encode($data));
echo "OK";
?>
