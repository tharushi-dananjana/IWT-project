<?php
    $con=new mysqli("localhost","root","","reservation");

    if($con->connect_error){
        die("Connection failed".$con->connect_error);
    
    }
   


?>