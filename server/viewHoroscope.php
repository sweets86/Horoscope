

<?php

session_start();


if (isset($_SERVER["REQUEST_METHOD"])) {

    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        
        if(isset($_GET["Date"])) {

            $_SESSION["Date"] = serialize($_GET["03-21"]);

            echo json_encode(unserialize($_SESSION["Date"]));
        } else {
            echo json_encode("Date is not set in body");
        }

    }else {
        echo json_encode("not a Get method");
    }

} else {
    echo json_encode("No valid request");

}

?>