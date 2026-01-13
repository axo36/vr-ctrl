<?php
if (file_exists("data.json")) {
    echo file_get_contents("data.json");
} else {
    echo json_encode([
        "date" => "",
        "heure" => "",
        "duree" => ""
    ]);
}
?>
