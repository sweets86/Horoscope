

<?php

session_start();


if (isset($_SERVER["REQUEST_METHOD"])) {

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        if(isset($_POST["Date"])) {

            $_SESSION["Date"] = serialize($_POST["03-21"]);

            echo json_encode(unserialize($_SESSION["Date"]));
        } else {
            echo json_encode("Date is not set in body");
        }

    }else {
        echo json_encode("not a Post method");
    }

} else {
    echo json_encode("No valid request");

}

?>