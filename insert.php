<?php
$servername="localhost";
$username="root";
$password="";
$dbname="wolfmania";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "Connect Error:" .mysqli_connect_error();
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$regioncity = $_POST['regioncity'];
$emailaddress = $_POST['emailaddress'];
$textarea = $_POST['textarea'];

// $sql = "INSERT INTO `register` (`firstname`, `lastname`,`regioncity`, `emailaddresss`,`textarea`) VALUES ('$firstname', '$lastname', '$regioncity', '$emailaddress' '$textarea')";
$sql = "INSERT INTO `register`(`firstname`, `lastname`, `regioncity`, `emailaddress`, `textarea`) VALUES ('[$firstname]','[$lastname]','[$regioncity]','[$emailaddress]','[$textarea]')";
if(mysqli_query($conn,$sql)){
echo "<h3>Form data collection success, please return to previous page</h3>";
}
else{
    echo "A little bug we can handle, try again momentarily";
}
mysqli_close($conn)
?>