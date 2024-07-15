<?php
include 'condb.php';

$id =$_GET['id'];
$sql ="DELETE FROM supplier WHERE SupplierID = '$id' ";

session_start();

if($_SESSION['Position'] == 'GM' || $_SESSION['Position'] == 'Sale' || $_SESSION['Position'] == 'HR'){
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    echo '<script>
    setTimeout(function() {
     swal({
         title: "ท่านไม่สามารถลบสมาชิกได้",
         type: "error"
        }, function() {
         window.location = "show_member.php"; //หน้าที่ต้องการให้กระโดดไป
        });
        }, 1000);
        </script>';

}else if(mysqli_query($conn,$sql)){
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    echo '<script>
                setTimeout(function() {
                swal({
                title: "Successfully deleted Supplier ID: '.$id.'",
                type: "success"
                }, function() {
                window.location = "show_supplier.php"; //หน้าที่ต้องการให้กระโดดไป
                });
                }, 1000);
                </script>';

}

mysqli_close($conn);

?>