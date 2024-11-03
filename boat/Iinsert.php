<!-- insert op -->
 
<?php

    require 'iconfig.php';

    $boatID = $_POST["bsid"];
    $boatcode = $_POST["bcode"];
    $boatowner = $_POST["bowner"];
    $boatype = $_POST["btype"];
    $boartrent = $_POST["brent"];
    
    $sql="INSERT INTO boat1 VALUES ('$boatID' , '$boatcode' , '$boatowner' , '$boatype', '$boartrent')";

    if($con->query($sql))
    {
        echo "Insert suscessful";
    }
    else{
        echo "Error".$con->error;
    }

    $con->close();

?>