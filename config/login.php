<?php

// INCLUDING THE CONNECTION FILE
include_once('connection.php');

// INCLUDING THE FUNCTIONS FILE
include_once('functions.php');

// define variables and set to empty values
$name = ""; $email = ""; $password = ""; $confirm_password = ""; 
$msg = $error = "";



// LOGIN CONFIGURATION
if(isset($_POST['login'])){

    $email = validate_input($_POST["email"]);
    $password = validate_input($_POST["password"]);
    $form_error = [];

    // CHECKING IF $email IS VALID
    if(empty($email)){
        $error = "Email is required";
        $form_error['email'] = $error;
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "please your email is invalid";
        $form_error['email'] = $error;
        
    }
    
    // VALIDATION OF PASSWORD 
    if(empty($password)){
        $error = "Password is required";
        $form_error['password'] = $error;
    }

    
    // Check for validation error and validate user details
    if(!empty($error)){
        $error = "invalid credentials";
    }else{

        // Check if user has an account
        $sql = "SELECT * FROM `users` WHERE `email`='$email';";
        $login_query = mysqli_query($conn, $sql);

        // Save the user information from data base
        $login_query_result = mysqli_fetch_assoc($login_query);

        
        if(!$login_query_result){
            $error = "Incorrect Email or Password!";
        }else{
            // Verify User Login
            if(!password_verify($password, $login_query_result['password'])){
                $error = "Incorrect Email or Password!";
            }else{
                $msg = "Login Successful.";
                // Save user information int a section
                $_SESSION['auth'] = $login_query_result;

                // Update the user last seen column
                $last_seen_sql = "UPDATE `users` SET last_seen = NOW() WHERE email='$email';";
                $last_seen__query = mysqli_query($conn, $last_seen_sql);

        
                // REDIRECT USER TO DASHBOARD
                header('refresh:3; url=dashboard.php');
            }
        }
    }
    // End of checking user details
    
}
// END OF LOGIN CONFIGURATION

?>
