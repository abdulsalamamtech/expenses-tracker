<?php

// Include DB Connection
include_once('connection.php');


// Validate User Input
function validate_input($data){
    if (empty($data)) {
        // $data = "please fill in this field";
        return  $data;
    }else{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
    return $data;
}

// Current Page
function isCurrentPage(string $page_name = ''){
    $this_page = str_contains(strtolower($_SERVER['PHP_SELF']), strtolower($page_name));
    return $this_page ? ' rounded-lg text-blue-900 bg-blue-100 ' : '';
}


