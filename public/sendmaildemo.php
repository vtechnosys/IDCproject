<?php
    $message = $_POST['msg'];
    //echo $_POST['msg'];
    //exit();
    $arr = explode(';',$message);
    //echo $arr[0];
    //exit();
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");
    $from = "balkrishnayemul.by@gmail.com";
    $to = "sales@whipsmartmi.com";
    $subject = "Testing mail";
    //$message = "Flight getting delayed due to some reasons";
    $headers = "From:" . $from;
    

    $msg = wordwrap($arr[1],70);
    mail($to,$arr[0],$msg);
        
    echo "send";

?>