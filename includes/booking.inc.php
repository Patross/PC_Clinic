<?php
require_once "dbh.inc.php";

if(isset($_POST['submit'])){
    if( isset($_POST['firstName']) && !empty($_POST['firstName']) &&
        isset($_POST['lastName']) && !empty($_POST['lastName']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['phone']) && !empty($_POST['phone']) &&
        isset($_POST['address']) && !empty($_POST['address']) &&
        isset($_POST['postcode']) && !empty($_POST['postcode']) 
        // isset($_POST['serial']) && !empty($_POST['serial']) &&
        // isset($_POST['passwords']) && !empty($_POST['passwords'])
        ){
        //Everything is set and has a value
        //Setting up post values as variables
        $firstName = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $postcode = $_POST['postcode'];
        // $serial = $_POST['serial'];
        // $passwords = $_POST['passwords'];

        //Check if telephone input has only numerical values
        if(ctype_digit($phone)){
            //Check if the email is a valid email
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                //GET USER DATA ONLY AND CREATE A USER IF IT DOESN NOT EXIST BASED
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
                                                                        
                }else{
                    //USER ALREADY EXISTS
                }


                //GET THE REST OF DATA AND CREATE A REQUEST ENTRY IN THE DB 
                //THAT LINKS TO THE USER FOREIGN KEY
            }
            else{
                //EMAIL INVALID
            }
        }else{
            //PHONE INPUT CONTAINS NON NUMERICAL CHARACTERS
        }
    }
}