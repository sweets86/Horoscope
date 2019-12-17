<?php

function getHoroscope($inputDate)
{
    $horoscope = array(
        "Väduren" => "03:21:04:19",
        "Oxen" => "04:20:05:20",
        "Tvillingarna" => "05:21:06:21",
        "Kräftan" => "06:22:07:22",
        "Lejonet" => "07:23:08:22",
        "Jungfrun" => "08:23:09:22",
        "Vågen" => "09:23:10:22",
        "Skorpionen" => "10:23:11:21",
        "Skytten" => "11:22:12:21",
        "Stenbocken" => "12:22:01:19",
        "Vattumannen" => "01:20:02:18",
        "Fiskarna" => "02:19:03:20"
    );

    $inputDateArr = explode("-", $inputDate);
    $inputMonth = (int)$inputDateArr[1];
    $inputDay = (int)$inputDateArr[2];


    foreach ($horoscope as $key => $value) {
        $dates = explode(":", $value);
        $fromMonth = (int)$dates[0];
        $fromDate = (int)$dates[1];
        $toMonth = (int)$dates[2];
        $toDate = (int)$dates[3];

        if($inputMonth == $fromMonth) {
            if($inputDay >= $fromDate) {
                return $key;
            }
        }
        
        if($inputMonth == $toMonth) {
            if($inputDay <= $toDate) {
                return $key;
            }
        }
    }
}


?>
