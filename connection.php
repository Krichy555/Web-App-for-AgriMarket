<?php 
    $nameserverserveserver="localhost";
    $usernameuseruserdb555="root";
    $mydbpsd11="";
    $namedbdatabase="ecomm";

    $conn=new mysqli($nameserverserveserver, $usernameuseruserdb555, $mydbpsd11, $namedbdatabase);
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->$connect_error);
    }else{
        //echo "Connected to database";
    }
    $mysqli= new mysqli($nameserverserveserver, $usernameuseruserdb555, $mydbpsd11, $namedbdatabase) or die(mysqli_error($mysqli));

?>