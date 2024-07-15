<?php

include 'condb_store.php';

echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

$Type_code = $_POST['Type_code'];
$name = $_POST['name'];
$details = $_POST['details'];
$pr_hl = $_POST['pr_hl'];
$color = $_POST['color'];
$price = $_POST['price'];

$sql ="INSERT INTO type_code (Type_code,name,details,pr_hl,color,price,image) 
    VALUES('$Type_code','$name','$details','$pr_hl','$color','$price','$new_imgae_name')";

if(is_uploaded_file($_FILES['file_pro']['tmp_name'])){
    $new_imgae_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file_pro']['tmp_name']), PATHINFO _EXTENSION);
    $image_upload_path = "./img/pro/".$new_imgae_name;
    move_upload_file($_FILES['file_pro']['tmp_name'], $image_upload_path);
}else{
    $new_image_name = ""
}

if(mysqli_qurery($conn,$sql))
    echo '<script>
    setTimeout(function() {
    swal({
    title: "เพิ่มสินค้าสำเร็จ",
    type: "success",
    timer: 2000,
    showConfirmButton: false
    }, function() {
    window.location = "show_member.php"; //หน้าที่ต้องการให้กระโดดไป
    });
    },500);
    </script>';
else{
    echo '<script>
    setTimeout(function() {
    swal({
    title: "เกิดข้อผิดพลาด",
    text: "โปรดติดต่อ : Admin",
    type: "error",
    timer: 2000,
    showConfirmButton: false
    }, function() {
    window.location = "show_member.php"; //หน้าที่ต้องการให้กระโดดไป
    });
    },500);
    </script>';

}

mysqli_close($conn);

?>