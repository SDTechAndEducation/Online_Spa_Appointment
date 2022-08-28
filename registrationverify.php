<?php

$username= $_POST['Name'];
$password= $_POST['Password'];
$email= $_POST['Email'];
$mobile= $_POST['Phone'];

$conn =  new mysqli('localhost','root','','online_spa');


if($conn->connect_error)
{
    alert("Connection Not established");
}
else
{
    $dup="SELECT * FROM registration WHERE Email='$email'";
    $result= mysqli_query($conn, $dup);
    $num=mysqli_num_rows($result);

    if($num>0)
    {
        header("location: error/no.html");
    }
    else{
        $stmt= $conn->prepare("insert into registration(Name,  Email, Phone, Password) values(?,?,?,?)");
        $stmt->bind_param("ssss", $username, $email, $mobile, $password);
        $stmt->execute();
        echo "Data Inserted Successfully!";
        header("location: Login.html");
        $stmt->close();
        $conn->close();
    }
}

?>