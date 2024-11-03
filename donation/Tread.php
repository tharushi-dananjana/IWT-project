<?php 

require 'Tconfig.php';

$sql="SELECT * FROM donerinformation";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo "<table border = '1'>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["ID"]."</td>"."<td>".$row["salutation"]."</td>"."<td>".$row["firstname"]."</td>"."<td>".$row["lastname"]."<br>";
        echo "</tr>";
    }
}
else
{
    echo "No Results";
}

$con->close();

?>