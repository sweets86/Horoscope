

<?php

require "./horoscopeCalculator.php";
session_start();


if (isset($_SERVER["REQUEST_METHOD"])) {
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        if(isset($_POST["date"])) {
            
            $horoscope = getHoroscope($_POST["date"]);
            echo json_encode($horoscope);

        } else {
            echo json_encode("Date is not set in body");
        }

    }else {
        echo json_encode("not a Post method");
    }

} else {
    echo json_encode("No valid request");

}



/* 
            $_SESSION["Date"] = serialize($_POST["date"]);

            echo json_encode(unserialize($_SESSION["Date"])); */
?>