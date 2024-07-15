<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $morning = $_POST['morning'];
    $time=implode(" ",$morning);
    $Confirmationby = $_POST['Confirmationby'];
    $dt = $_POST['dt'];

//Database Connection
    $conn = new mysqli('localhost','root','','appointment');
    if($conn -> connect_error)
    {
        die('Connection Failed:'.$conn->connect_error);
    }
    else{
        
        $sql="insert into appoin (name,email,phone,morning,Confirmationby,dt) values('$name','$email','$phone','$time','$Confirmationby','$dt')";
        if($conn->query($sql)===TRUE)
        {
            echo "Requested Submitted Successfully...";
        }
        else{
            echo "$conn->error";
        }
        $conn ->close();
    }
?>