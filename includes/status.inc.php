<?php

require_once "dbh.inc.php";
session_start();

if(isset($_POST['submit']) &&
   isset($_POST['additionalInformation']) &&
   isset($_POST['status']) && !empty($_POST['status']) &&
   isset($_POST['workedOn']) && !empty($_POST['workedOn'])&&
   isset($_POST["dateCarriedOut"]) && !empty($_POST["dateCarriedOut"])){

    $date = $_POST["dateCarriedOut"];

    $workedOnby = $_POST['workedOn'];

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
    $wiredEmailConfiguration = isset($_POST['wiredEmailConfig'])?"yes":"no";
    $wirelessConnection = isset($_POST['wirelessConnection'])?"yes":"no";
    $wirelessInternet = isset($_POST['wirelessInternet'])?"yes":"no";
    $wirelessEmailConfiguration = isset($_POST['wirelessEmailConfig'])?"yes":"no";


    $additionalInformation = $_POST['additionalInformation'];
    $status = $_POST['status'];

    $bookingId = $_GET['id'];

    $count = $conn->query("select id from job_status where `booking_id` = '$bookingId'")->fetchColumn(); 
        if($count == 0){
                ///
                /// INSERTING STATUS INTO THE DATABASE FOR THE FIRST TIME
                ///
                $queryInsert = "INSERT INTO job_status(`worked_on_by`,`booking_id`,`date_worked`,`motherboard`,`processor`,`ram`,`gpu`,`network_card`,`sound_card`,`optical_drive`,`power_supply`,`hdd`,
                                        `ssd`,`monitor`,`keyboard`,`mouse`,`up_to_date`,`virus_scanner`,`email`,`wired_connection`,`wired_internet`,`wired_email_configuration`,
                                        `wireless_connection`,`wireless_internet`,`wireless_email_configuration`,`additional_information`,`status`)
                                        
                                values(:worked_on_by,:booking_id,:date,:motherboard,:processor,:ram,:gpu,:network_card,:sound_card,:optical_drive,:power_supply,:hdd,
                                        :ssd,:monitor,:keyboard,:mouse,:up_to_date,:virus_scanner,:email,:wired_connection,:wired_internet,:wired_email_configuration,
                                        :wireless_connection,:wireless_internet,:wireless_email_configuration,:additional_information,:status);";
                $queryInsertStatus = $conn->prepare($queryInsert);
                $queryInsertStatus->execute(array(
                        ":worked_on_by" => $workedOnby,
                        ":booking_id" => $bookingId,
                        ":date" => $date,
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
                        ":wired_email_configuration" => $wiredEmailConfiguration,
                        ":wireless_connection" => $wirelessConnection,
                        ":wireless_internet" => $wirelessInternet,
                        ":wireless_email_configuration" => $wirelessEmailConfiguration,
                        ":additional_information" => $additionalInformation,
                        ":status" => $status
                ));
        }else{

                ///
                /// UPDATING ALREADY EXISTING DATABASE RECORD
                ///
                $queryUpdate = "UPDATE job_status SET `worked_on_by` = :worked_on_by, `date_worked` = :date, `motherboard` = :motherboard, `processor` = :processor, `ram` = :ram,
                                                        `gpu` = :gpu, `network_card` = :network_card, `sound_card` = :sound_card, `optical_drive` = :optical_drive, `power_supply` = :power_supply, `hdd` = :hdd,
                                                        `ssd` = :ssd, `monitor` = :monitor, `keyboard` = :keyboard, `mouse` = :mouse, `up_to_date` = :up_to_date, `virus_scanner` = :virus_scanner, `email` = :email,
                                                        `wired_connection` = :wired_connection, `wired_internet` = :wired_internet, `wired_email_configuration` = :wired_email_configuration,
                                                        `wireless_connection` = :wireless_connection, `wireless_internet` = :wireless_internet, `wireless_email_configuration` = :wireless_email_configuration,
                                                        `additional_information` = :additional_information, `status` = :status WHERE `booking_id` = :booking_id;";
                $queryUpdateStatus = $conn->prepare($queryUpdate);
                $queryUpdateStatus->execute(array(
                        ":worked_on_by" => $workedOnby,
                        ":date" => $date,
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
                        ":wired_email_configuration" => $wiredEmailConfiguration,
                        ":wireless_connection" => $wirelessConnection,
                        ":wireless_internet" => $wirelessInternet,
                        ":wireless_email_configuration" => $wirelessEmailConfiguration,
                        ":additional_information" => $additionalInformation,
                        ":status" => $status,
                        ":booking_id" => $bookingId
                ));
        }
}else{
        $bookingId = $_GET['id'];
        header("Location: ../workedOn.php?id=".$bookingId."&error=empty");
        die();
}
