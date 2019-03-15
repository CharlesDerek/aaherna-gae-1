<?php 


        // Create connection
        
    $db['db_host'] = "0.0.0.0";
    $db['db_user'] = "charlesderek";
    $db['db_pass'] = "";
    $db['db_name'] = "cms";
    
    foreach($db as $key => $value){
        define(strtoupper($key), $value);
    }
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
        if($connection){
            echo "We are connected";
        } else {
            die("Database connection has seemed to fail. Something went wrong while sending your request. Please Try again in a few minutes. If the issue continues to occur <a href='mailto:Contact@mrginnovations.com?subject=Hello%20MRGI%20Team!%20&body=Hello%20MRGI%20USA%20Support%20Team!%20I%20seem%20to%20be%20having%20trouble%20with%20my%20connection%20(with%20error%20code%20%23DB1732).%20Please%20fix%20the%20issue%20so%20i%20can%20login!%20Thank%20you%20very%20much,%20and%20have%20a%20great%20day!'>please let us know!</a>");
        }

function strEsc($str_cleaner) {
    global $connection;
    
    $str_escaped = mysqli_real_escape_string($connection,$str_cleaner);
    return $str_escaped;
}

?>
