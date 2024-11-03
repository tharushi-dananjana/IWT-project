<!-- insert op -->
 
<?php

    require 'Tconfig.php';

    $studID = $_POST["sid"];
    $studSalutation = $_POST["ssalutation"];
    $studFirstName = $_POST["sfname"];
    $studLastName = $_POST["slname"];
    $studPhone = $_POST["sphone"];
    $studEmail = $_POST["semail"];
    $studCountry = $_POST["scountry"];
    $studCard_Num = $_POST["scard_num"];
    $studCard_Name = $_POST["scard_name"];
    $studAmount = $_POST["samount"];
    $studDate = $_POST["sdate"];
    $studCVV = $_POST["scvv"];
    
    $sql="INSERT INTO donerinformation VALUES ('$studID' , '$studSalutation' , '$studFirstName' , '$studLastName' , '$studPhone' , 
    ' $studEmail' , '$studCountry' , '$studCard_Num' , '$studCard_Name' , '$studAmount' , '$studDate' , '$studCVV')";

    if($con->query($sql))
    {
        header("Location: Tdonation.php");
        echo "Insert suscessful";
    }
    else {
        echo "Error".$con->error;
            
    }

    $con->close();

?>