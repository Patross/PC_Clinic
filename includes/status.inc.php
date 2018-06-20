<?php

require_once "dbh.inc.php";

if(isset($_POST['submit']) &&
   isset($_POST['additionalInformation']) &&
   isset($_POST['status']) && !empty($_POST['status']) &&
   isset($_POST['workedOn']) && !empty($_POST['workedOn'])){

    $date = date("Y-m-d");

    $motherboard = isset($_POST['motherboard'])?"yes":"no";
    $processor = isset($_POST['processor'])?"yes":"no";
    $ram = isset($_POST['ram'])?"yes":"no";
    $gpu = isset($_POST['gpu'])?"yes":"no";
    $networkCard = isset($_POST['networkCard'])?"yes":"no";
    $soundCard = isset($_POST['soundCard'])?"yes":"no";
    $opticalDrive = isset($_POST['opticalDrive'])?"yes":"no";
    $powerSupply = isset($_POST['powerSupply'])?"yes":"no";
    $hdd = isset($_POST['hdd'])?"yes":"no";
    $ssd = isset($_POST['ssd'])?"yes":"no";
    $monitor = isset($_POST['monitor'])?"yes":"no";
    $keyboard = isset($_POST['keyboard'])?"yes":"no";
    $mouse = isset($_POST['mouse'])?"yes":"no";
    $upToDate = isset($_POST['upToDate'])?"yes":"no";
    $virusScanner = isset($_POST['virusScanner'])?"yes":"no";
    $email = isset($_POST['email'])?"yes":"no";
    $wiredConnection = isset($_POST['wiredConnection'])?"yes":"no";
    $wiredInternet = isset($_POST['wiredInternet'])?"yes":"no";
    $wiredEmailConfig = isset($_POST['wiredEmailConfig'])?"yes":"no";
    $wirelessConnection = isset($_POST['wirelessConnection'])?"yes":"no";
    $wirelessInternet = isset($_POST['wirelessInternet'])?"yes":"no";
    $wirelessEmailConfig = isset($_POST['wirelessEmailConfig'])?"yes":"no";


    $additionalInformation = $_POST['additionalInformation'];
    $status = $_POST['status'];

    $queryInsert = "INSERT INTO status(`motherboard`,`processor`,`ram`,`gpu`,`network_card`,`sound_card`,`optical_drive`,`power_supply`,`hdd`,
                                        `ssd`,`monitor`,`keyboard`,`mouse`,`up_to_date`,`virus_scanner`,`email`,`wired_connection`,`wired_internet`,`wired_email_config`,
                                        `wireless_connection`,`wireless_internet`,`wireless_email_config`,`additional_information`,`status`)
                                        
                                values(:motherboard,:processor,:ram,:gpu,:network_card,:sound_card,:optical_drive,:power_supply,:hdd,
                                        :ssd,:monitor,:keyboard,:mouse,:up_to_date,:virus_scanner,:email,:wired_connection,:wired_internet,:wired_email_config,
                                        :wireless_connection,:wireless_internet,:wireless_email_config,:additional_information,:status) where ??";
    $queryUpdateStatus = $conn->prepare($queryInsert);
    $queryUpdateStatus->execute(array(
       ":motherboard" => $motherboard,
       ":processor" => $processor,
       ":ram" => $ram,
       ":gpu" => $gpu,
       ":network_card" => $networkCard,
       ":sound_card" => $soundCard,
       ":optical_drive" => $opticalDrive,
       ":power_supply" => $powerSupply,
       ":hdd" => $hdd,
       ":ssd" => $ssd,
       ":monitor" => $monitor,
       ":keyboard" => $keyboard,
       ":mouse" => $mouse,
       ":up_to_date" => $upToDate,
       ":virus_scanner" => $virusScanner,
       ":email" => $email,
       ":wired_connection" => $wiredConnection,
       ":wired_internet" => $wiredInternet,
       ":wired_email_config" => $wiredEmailConfig,
       ":wireless_connection" => $wirelessConnection,
       ":wireless_internet" => $wirelessInternet,
       ":wireless_email_config" => $wirelessEmailConfig,
       ":additional_information" => $additionalInformation,
       ":status" => $status
    ))


}