<?php

$conn= new mysqli('localhost','root','','online_bus');

if(!$conn)
{
    die("Sorry we failed to connect :". mysqli_connect_error());
}
else{
    echo "Connection sucessful";
}

$sql = "SELECT Name, email, Phone from registration";
$result= mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);

if($num!=0)
{
    // $row= mysqli_fetch_assoc($result);
    // echo "<br>";
    // echo var_dump($row);

    while($row= mysqli_fetch_assoc($result))
    {
        echo "<tr><td><br>".$row['Name']."</td><td>".$row['email']."</td><td>".$row['Phone']."</td></tr>";
    }
}

?>