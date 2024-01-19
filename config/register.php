<?php
// INCLUDING THE CONNECTION FILE
include('connection.php');

// INCLUDING THE FUNCTIONS FILE
include('functions.php');

// define variables and set to empty values
$name = ""; $email = ""; $password = ""; $confirm_password = ""; 
$msg = $error = "";


// REGISTRATION CONFIGURATION
if (isset($_POST['register'])) {

    $name = validate_input($_POST["name"]);
    $email = validate_input($_POST["email"]);
    $password = validate_input($_POST["password"]);
    $confirm_password = validate_input($_POST["confirm_password"]);
    $form_error = [];


     // CHECKING IF User Name ARE LETTERS
    if(empty($name)){
        $error = "Name is required";
        $form_error['name'] = $error;
    } elseif(!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $error = "Name must be letters";
        $form_error['name'] = $error;
        
    }

    // CHECKING IF $email IS VALID
    if(empty($email)){
        $error = "Email is required";
        $form_error['email'] = $error;
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "please your email is invalid";
        $form_error['email'] = $error;
        
    }
    
    // VALIDATION OF PASSWORD AND CONFIRM PASSWORD
    if(empty($password)){
        $form_error['password'] = $error;
        $error = "Password is required";
    } elseif(strlen($password) < 10){
        $error = "Password is too weak, it must be upto 10 character long";
        $form_error['password'] = $error;
    } elseif(preg_match('/^\S.*\s.*\S$/', $password)){
        $error = "Password can not contain spaces";
        $form_error['password'] = $error;
    } elseif($password !== $confirm_password){
        $error = "Passwords and confirm password don't match";
        $form_error['password'] = $error;
    }
 

    // CREATE USER ACCOUNT IF NO ERROR FOUND
    if(empty($error)){

        // CHECKING IF USER HAVE AN ACCOUNT
        // IN THE DATABASE BEFORE REGISTERING THEM

        // checking if email address has already been use
        $check_sql_email = "SELECT * FROM `users` WHERE `email`='$email';";
        $check_query_email = mysqli_query($conn, $check_sql_email);
        $check_query_num_email = mysqli_num_rows($check_query_email);

        if($check_query_num_email > 0) {
            $error = "Email Address has already been use, Please register with a new email.";

        } else {

            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            
            
            // CREATE ACCOUNT FOR USER
            $sql = "INSERT INTO `users` (`name`, `email`, `password`) 
                    VALUES ('$name', '$email', '$hash_password')";

            $query = mysqli_query($conn, $sql);
            if (!$query) {
                $error = "Error connecting to database" . mysqli_error($conn);
            } else {
                $msg = "registration successful.";

                header('refresh:2; url=login.php');

            }
            // END OF CREATION OF ACCOUNT
        }
        
    }else{
        $error = "invalid credentials";
    }
    // END OF CHECKING ERRORS AND CREATION OF ACCOUNT

}
// END OF REGISTRATION

