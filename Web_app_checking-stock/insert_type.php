<?php

include 'condb.php';

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$Position = $_POST['Position'];

$sql ="INSERT INTO db_member (Fname,Lname,address,phone,username,password,Position) VALUES('$Fname','$Lname','$address','$phone','$username','$password','$Position')";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='show_member.php';</script>";

}else{
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";
}


mysqli_close($conn);

?>