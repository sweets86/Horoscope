<?php

session_start();

if (isset($_SERVER["REQUEST_METHOD"])) {

    if ($_SERVER["REQUEST_METHOD"] === "GET") {

        if (isset($_SESSION["horoscope"])) {

            echo json_encode(unserialize($_SESSION["horoscope"]));
        } else {
            echo json_encode("");
        }
    } else {
        echo json_encode("not a Get method");
    }
} else {
    echo json_encode("No valid request");
}

?>