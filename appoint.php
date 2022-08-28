<?php
$id=uniqid();
$username= $_POST['Name'];
$email= $_POST['Email'];
$mobile= $_POST['Phone'];
$time=$_POST['Time'];
$date= $_POST['Date'];
$list= $_POST['List'];
$amt= $_POST['Amount'];
$upi= $_POST['UPI'];

echo $id;
echo $username;
echo $email;
echo $mobile;
echo $time;
echo $date;
echo $list;
echo $amt;
echo $upi;

$conn =  new mysqli('localhost','root','','online_spa');


if($conn->connect_error)
{
    alert("Connection Not established");
}
else {
    $stmt1= $conn->prepare("insert into appoint(ID, Name,  Email, Phone, Time, Date, List, Amount, Trans) values(?,?,?,?,?,?,?,?,?)");
      
        $stmt1->bind_param("sssssssss", $id, $username, $email, $mobile, $time, $date, $list, $amt, $upi);
        $stmt1->execute();
        echo "Data Inserted Successfully!";
        header("location: errorappoint.html");
        $stmt->close();
        $conn->close();
}
?>