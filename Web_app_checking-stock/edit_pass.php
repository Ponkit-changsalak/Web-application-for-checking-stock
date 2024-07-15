<?php
include 'condb.php';
session_start();

$id = $_SESSION['id'];
$sql="SELECT * FROM tbl_member WHERE id= '$id' ";
$result= mysqli_query($conn,$sql);
$row =  mysqli_fetch_array($result);


?>

<!--clock-->
<style>
@import url(https://fonts.googleapis.com/css?family=Oswald:300,400);

body {
    background-color: #222;
}

#currentTime {}
</style>

<script>
window.onload = function() {
    clock();

    function clock() {
        var now = new Date();
        var TwentyFourHour = now.getHours();
        var hour = now.getHours();
        var min = now.getMinutes();
        var sec = now.getSeconds();
        var mid = 'PM';
        if (min < 10) {
            min = "0" + min;
        }
        if (hour > 12) {
            hour = hour - 12;
        }
        if (hour == 0) {
            hour = 12;
        }
        if (TwentyFourHour < 12) {
            mid = 'AM';
        }
        document.getElementById('currentTime').innerHTML = hour + ':' + min + ':' + sec + ' ' + mid;
        setTimeout(clock, 1000);
    }
}
</script>

<style>
.btn-1 {
    min-width: 20px;
}
</style>

<!--clock-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500&amp;subset=latin-ext" rel="stylesheet">
    <link rel="shortcut icon" href="png/icon.png" />

</head>

<style>
html {
    font-size: 14px;
}

.container {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
}
</style>

<body>

    <body class="bg-light">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="png/icon.png" alt="" width="58" height="50" class="d-inline-block align-text-top">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand">Check store </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <li>
                        <hr class="dropdown-divider bg-light">
                    </li>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="main.php"><img src="png/home.png"
                                    alt="" width="17" height="17" class="d-inline-block align-text-top"> Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="show_member.php"><img src="png/user-3.png" alt=""
                                    width="17" height="17" class="d-inline-block align-text-top"> Member</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="show_store.php"><img src="png/store-w.png" alt=""
                                    width="17" height="17" class="d-inline-block align-text-top"> Store</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="show_product.php"><img src="png/pro.png" alt="" width="17"
                                    height="17" class="d-inline-block align-text-top"> Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="show_type.php"><img src="png/type1.png" alt="" width="17"
                                    height="17" class="d-inline-block align-text-top"> Type Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="show_supplier.php"><img src="png/building.png" width="18"
                                    height="17" class="d-inline-block align-text-top"> Supplier</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="import_products.php"><img src="png/truck-side.png" width="18"
                                    height="17" class="d-inline-block align-text-top"> Import Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="selling_products.php"><img src="png/best-w.png" width="18"
                                    height="17" class="d-inline-block align-text-top"> Selling Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="show_profit.php"><img src="png/sack-dollar.png" width="18"
                                    height="17" class="d-inline-block align-text-top"> Profit Product</a>
                        </li>



                </div>
                </li>
                </ul>

                <li>
                </li>
                <form class="d-flex mt-3">
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle " data-bs-toggle="dropdown"
                            aria-expanded="false"><?= $_SESSION['Position'].' : '.$_SESSION['name'];?>

                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" type="button" href="show_edit+fr_image_mem.php"><img
                                    src="png/id-badge.png" alt="" width="18" height="18"
                                    class="d-inline-block align-text-top"> About Me</a>

                            <a href="edit_pass.php" class="dropdown-item" type="button"><img src="png/key.png" alt=""
                                    width="18" height="18" class="d-inline-block align-text-top"> Change
                                Password</a>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <a href="logout.php" class="dropdown-item "
                                onclick="return confirm('ยืนยันการออกจากระบบ');"><img src="png/exit.png" alt=""
                                    width="17" height="17" class="d-inline-block align-text-top"> Logout</a>
                        </ul>
                    </div>
                </form>
            </div>
            </div>
        </nav>

        <!-- **************** -->


        <div class="container container-fluid">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <!-- ปุ่มเพิ่ม d-->
                    <a href="main.php" class="btn btn-1 btn-primary mt-4 mb-2 shadow-sm"><img src="png/back.png" width="25"
                            height="25"></a>
                    <a class="btn btn-danger mt-4 mb-2 shadow-sm">Change Pssword <img src="png/key-w.png" width="25"
                            height="25"></a>

                    <div class="bg-white border rounded p-4 shadow">

                        <form class="row g-3 " method="POST">

                            <div class="form-group mt-1 mb-2">
                                <label for="validationCustom01" class="form-label">ID</label>
                                <input type="text" name="id_mem"
                                    class="form-control form-control-color bg-Secondary shadow-sm text-white"
                                    value=<?=$row['id']?> readonly>
                            </div>

                            <div class="form-group mt-1 mb-2">
                                <label for="inputName">New Password</label>
                                <input type="text" name="password" class="form-control" required minlength="8">
                            </div>

                            <div class="form-group mt-1 mb-2">
                                <label for="inputName">Confirm New Password</label>
                                <input type="text" name="password_ch" class="form-control" required minlength="8">
                            </div>

                            <input class="btn btn-success" type="submit" value="Update Pssword">
                    </div>
                </div>
            </div>
        </div>

        </form>
        </div>


        <!--ข้อความหลัง -->

        <div class="my-4 text-muted text-center">
            <p><img src="png/db.png" alt="" width="19" height="18" class="d-inline-block align-text-top"> PROJECT
                DATA BASE / TIME NOW :
                <!--clock-->
                <h5.5 id="currentTime"></h5.5>
            </p>
        </div>

    </body>

</html>

<?php

if(isset($_POST['password'])){

    echo '
            <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    
    require_once 'connect.php';
    

    $password = $_POST['password'];
    $password_ch = $_POST['password_ch'];

    

        //check duplicat
        $stmt = $conn->prepare("SELECT id FROM tbl_member WHERE password = :password");
        $stmt->bindParam(':password', $password , PDO::PARAM_STR);
        $stmt->execute(array(':password' => $password));
        //ถ้า username ซ้ำ ให้เด้งกลับไปหน้าสมัครสมาชิก ปล.ข้อความใน sweetalert ปรับแต่งได้ตามความเหมาะสม
        
        
        
        if($password != $password_ch){
            echo '<script>
                setTimeout(function() {
                swal({
                title: "Password did not match", //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                text: "Please try again...", //ข้อความเปลี่ยนได้ตามการใช้งาน
                type: "warning", //success, warning, danger
                timer: 2500, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                    }, function(){
                window.location.href = "edit_pass.php"; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                });
                });
                </script>';

            }else if($stmt->rowCount() > 0){
            echo '<script>
            setTimeout(function() {
            swal({
            title: "คุณใช้ Password นี้อยู่เเล้ว", //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
            text: "Please try again...", //ข้อความเปลี่ยนได้ตามการใช้งาน
            type: "warning", //success, warning, danger
            timer: 2500, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
            showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                }, function(){
            window.location.href = "edit_pass.php"; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
            });
            });
            </script>';

        
    
        }else{
                
                    include 'condb.php';

                    $password = $_POST['password'];

                    $sql = "UPDATE tbl_member SET password='$password' WHERE id ='$id' ";

                    if(mysqli_query($conn,$sql)){
                        echo '<script>
                                setTimeout(function() {
                                swal({
                                title: "เปลื่ยนรหัสผ่านสำเร็จ",
                                type: "success",
                                timer: 2000,
                                showConfirmButton: false
                                }, function() {
                                window.location = "main.php"; //หน้าที่ต้องการให้กระโดดไป
                                });
                                },500);
                                </script>';

                    }else{
                        echo '<script>
                            setTimeout(function() {
                            swal({
                            title: "เเก้ไขรหัสผ่านไม่สำเร็จ",
                            type: "error",
                            timer: 2000,
                            showConfirmButton: false
                            }, function() {
                            window.location = "main.php"; //หน้าที่ต้องการให้กระโดดไป
                            });
                            },500);
                            </script>';
                    }
            }
    }

?>