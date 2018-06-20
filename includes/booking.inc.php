<?php
require_once "dbh.inc.php";
session_start();
if(isset($_GET['mode']) && $_GET['mode']=="new"){
    if(isset($_POST['submit'])){
        if( isset($_POST['firstName']) && !empty($_POST['firstName']) &&
            isset($_POST['lastName']) && !empty($_POST['lastName']) &&
            isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['phone']) && !empty($_POST['phone']) &&
            isset($_POST['address']) && !empty($_POST['address']) &&
            isset($_POST['postcode']) && !empty($_POST['postcode']) &&
            isset($_POST['priority']) && !empty($_POST['priority']) &&
            isset($_POST['jobType']) && !empty($_POST['jobType']) &&
            isset($_POST['serial']) && !empty($_POST['serial']) &&
            isset($_POST['passwords']) && !empty($_POST['passwords']) &&
            isset($_POST['issue']) && !empty($_POST['issue'])
            ){
            //Everything is set and has a value
            //Setting up post values as variables
            $firstName = $_POST['firstName'];
            $lastname = $_POST['lastName'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $postcode = $_POST['postcode'];
            $priority = $_POST['priority'];
            $jobType = $_POST['jobType'];
            $serial = $_POST['serial'];
            $passwords = $_POST['passwords'];
            $issue = $_POST['issue'];

            //Check if telephone input has only numerical values
            if(ctype_digit($phone)){
                //Check if the email is a valid email
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    //GET USER DATA ONLY AND CREATE A USER IF IT DOESN'T NOT EXIST BASED
                    //ON THE EMAIL ADDRESS PROVIDED
                    $count = $conn->query("select id from users where `email_address` = '$email'")->fetchColumn(); 
                    if($count == 0){

                        $queryAddUser = $conn->prepare
                        ("INSERT INTO users(`first_name`,`last_name`,`email_address`,`phone_number`,`address`,`postcode`) values(:firstName,:lastName,:emailAddress,:phoneNumber,:address,:postcode);");
                        $queryAddUser->execute(array(
                            ':firstName' => $firstName,
                            ':lastName' => $lastname,
                            ':emailAddress' => $email,
                            ':phoneNumber' => $phone,
                            ':address' => $address,
                            ':postcode' => $postcode
                            //NEEDS TESTING
                            
                        ));
                        $queryGetUser = $conn->prepare("SELECT `id` FROM users WHERE `email_address` = :email");
                        $queryGetUser->execute(array(
                            ':email' => $email
                        
                        ));
                        $result = $queryGetUser->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['userId'] = $result['id'];
                                                        
                    }else{
                        //USER ALREADY EXISTS
                        $queryGetUser = $conn->prepare("SELECT `id` FROM users WHERE `email_address` = :email");
                        $queryGetUser->execute(array(
                            ':email' => $email
                        
                        ));
                        $result = $queryGetUser->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['userId'] = $result['id'];

                    }
                    $userId = $_SESSION['userId'];
                    $queryAddBooking = $conn->prepare
                    ("INSERT INTO booking(`user_id`,`date_booked`,`serial_number`,`passwords`,`priority`,`problem_description`) values(:user_id,:date,:serial_number,:passwords,:priority,:problem_description);");
                    $queryAddBooking->execute(array(
                        ':user_id' => $userId,
                        ':date' => @date("Y-m-d"), 
                        ':serial_number' => $serial,
                        ':passwords' => $passwords,
                        ':priority' => $priority,
                        ':problem_description' => $issue
                        //NEEDS TESTING
                    ));	
            }else{
                //EMAIL INVALID
                header("Location: ../index.php?mode=NEW&error=email");
                die();
            }
        }else{
            //PHONE INVALID
            header("Location: ../index.php?mode=NEW&error=phone");
            die();
        }
    }else{
        //NOT ALL FILLED IN
        header("Location: ../index.php?mode=NEW&error=empty");
        die();
    }
    }
}
else{
// existing user queries here
if(isset($_POST['submit'])){
    if( isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['priority']) && !empty($_POST['priority']) &&
        isset($_POST['jobType']) && !empty($_POST['jobType']) &&
        isset($_POST['serial']) && !empty($_POST['serial']) &&
        isset($_POST['passwords']) && !empty($_POST['passwords']) &&
        isset($_POST['issue']) && !empty($_POST['issue'])){
        $email = $_POST['email'];
        $priority = $_POST['priority'];
        $jobType = $_POST['jobType'];
        $serial = $_POST['serial'];
        $passwords = $_POST['passwords'];
        $issue = $_POST['issue'];

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $queryGetUser = $conn->prepare("SELECT `id` FROM users WHERE `email_address` = :email");
            $queryGetUser->execute(array(
                ':email' => $email
            
            ));
            $result = $queryGetUser->fetch(PDO::FETCH_ASSOC);
            $_SESSION['userId'] = $result['id'];
            $userId = $_SESSION['userId'];
            
            $queryAddBooking = $conn->prepare
            ("INSERT INTO booking(`user_id`,`date_booked`,`serial_number`,`passwords`,`priority`,`problem_description`) values(:user_id,:date,:serial_number,:passwords,:priority,:problem_description);");
            $queryAddBooking->execute(array(
                ':user_id' => $userId,
                ':date' => @date("Y-m-d"), 
                ':serial_number' => $serial,
                ':passwords' => $passwords,
                ':priority' => $priority,
                ':problem_description' => $issue
                
            ));	
        }else{
             header("Location: ../index.php?mode=OLD&error=email");
             die();
        }
    }else{
         header("Location: ../index.php?mode=OLD&error=empty");
         die();
    }
}

}
header("Location: ../search.php");
session_unset();