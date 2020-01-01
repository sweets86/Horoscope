

<?php

require "./horoscopeCalculator.php";
session_start();

if (isset($_SERVER["REQUEST_METHOD"])) {

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        if (!isset($_SESSION["horoscope"])) {

            if (isset($_POST["date"])) {

                $horoscope = getHoroscope($_POST["date"]);
                $_SESSION["horoscope"] = serialize($horoscope);
                echo json_encode(true);
                exit;
            } else {
                echo json_encode("Date is not set in body");
                exit;
            }
        } else {
            
            echo json_encode(false);
            exit;
        }
    } else {
        echo json_encode("not a Post method");
        exit;
    }
} else {
    echo json_encode("No valid request");
    exit;
}

?>