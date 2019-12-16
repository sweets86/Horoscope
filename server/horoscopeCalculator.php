<?php

function getHoroscope($dates) {
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

}


    /* $fromMonths = explode(":", "01:02:03:04:05:06:07:08:09:10:11:12");
    $fromDays = explode(":", "01:02:03:04:05:06:07:08:09:10:11:12:13:14:15:16:17:18:19:20:21:22:23:24:25:26:27:28:29:30:31");

    $toMonths = explode(":", "01:02:03:04:05:06:07:08:09:10:11:12");
    $toDays = explode(":", "01:02:03:04:05:06:07:08:09:10:11:12:13:14:15:16:17:18:19:20:21:22:23:24:25:26:27:28:29:30:31"); */
    
    $dates = explode(":", "03:21:04:19:");
    $fromMonth = (int)$dates[0]; //3
    $fromDate = (int)$dates[1]; //21
    $toMonth = (int)$dates[2]; //4
    $toDate = (int)$dates[3]; //19
    error_log($fromMonth);
    error_log($fromDate);
    error_log($toMonth);
    error_log($toDate);
    
    foreach ($horoscope as $keys => $value); {
      if($dates[0])

        /* if("03:21:04:19" == true) {
            error_log("Väduren");
        }if("04:20:05:20" == true) {
            error_log("Oxen");
        }if("05:21:06:21" == true) {
            error_log("Tvillingarna");
        }if("06-22:07-22" == true) {
            error_log("Kräftan");
        }if("07-23:08-22" == true) {
            error_log("Lejonet");
        }if("08-23:09-22" == true) {
            error_log("Jungfrun");
        }if("09-23:10-22" == true) {
            error_log("Vågen");
        }if("10-23:11-21" == true) {
            error_log("Skorpionen");
        }if("11-22:12-21" == true) {
            error_log("Skytten");
        }if("12-22:01-19" == true) {
            error_log("Stenbocken");
        }if("01-20:02-18" == true) {
            error_log("Vattumannen");
        }if("02-19:03-20" == true) {
            error_log("Fiskarna");
        }
        /* error_log($keys); */ 

    /* return; */
    }