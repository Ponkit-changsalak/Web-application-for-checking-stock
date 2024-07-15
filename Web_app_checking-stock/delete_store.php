<?php
include 'condb_store.php';

$id_store =$_GET['id'];
$sql ="DELETE FROM store WHERE id_store = '$id_store' ";

if(mysqli_query($conn,$sql)){
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    echo '<script>
                setTimeout(function() {
                swal({
                title: "Successfully deleted store ID: '.$id_store.'",
                type: "success"
                }, function() {
                window.location = "show_store.php"; //หน้าที่ต้องการให้กระโดดไป
                });
                }, 1000);
                </script>';

}else {
    // ตรวจสอบว่า error ที่เกิดขึ้นเกี่ยวกับ foreign key constraint หรือไม่
    if (mysqli_errno($conn) == 1451) {
        echo '<script>
            setTimeout(function() {
            swal({
                title: "ไม่สามารถลบคลังสินค้าได้เนื่องจากมีการอ้างอิงจากตารางอื่นๆ",
                type: "error"
                }, function() {
                window.location = "show_store.php"; //หน้าที่ต้องการให้กระโดดไป
                });
                }, 1000);
                </script>';
    } else {
        echo '<script>
            setTimeout(function() {
            swal({
                title: "เกิดข้อผิดพลาดในการลบคลังสินค้า",
                type: "error"
                }, function() {
                window.location = "show_store.php"; //หน้าที่ต้องการให้กระโดดไป
                });
                }, 1000);
                </script>';
    }
}
?> 
