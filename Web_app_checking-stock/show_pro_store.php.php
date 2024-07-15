<?php
include 'condb_store.php';
?>

<?php
session_start();
echo '
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
//เช็คว่ามีตัวแปร session อะไรบ้าง
//print_r($_SESSION);
//exit();
//สร้างเงื่อนไขตรวจสอบสิทธิ์การเข้าใช้งานจาก session

if(empty($_SESSION['id']) && empty($_SESSION['name']) && empty($_SESSION['surname'])){
            echo '<script>
                setTimeout(function() {
                swal({
                title: "กรุณาล็อคอินใหม่อีกครั้ง",
                type: "error"
                }, function() {
                window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                });
                }, 1000);
                </script>';
            exit();
}
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

<!--clock-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
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
                <a class="navbar-brand">Chack store</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <li>
                        <hr class="dropdown-divider bg-light">
                    </li>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="main.php"><img src="png/home.png"
                                    alt="" width="19" height="19" class="d-inline-block align-text-top"> Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="show_member.php"><img src="png/user-3.png" alt=""
                                    width="15" height="17" class="d-inline-block align-text-top"> Member</a>
                        </li>

                        <li class="nav-item">
                            <div class="btn-group">
                                <a href="show_product.php" class="btn btn-dark shadow-sm "><img src="png/pro.png" alt=""
                                        width="16" height="18" class="d-inline-block align-text-top"> Product</a>

                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="fr_product.php"><img src="png/add.png" alt=""
                                                width="18" height="19" class="d-inline-block align-text-top"> Add
                                            Product</a>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="show_type.php"><img src="png/type.png" alt=""
                                                width="16" height="18" class="d-inline-block align-text-top"> Type
                                            Products</a>
                                    </li>

                                    <li><a class="dropdown-item" href=""><img src="png/best.png" alt="" width="16"
                                                height="18" class="d-inline-block align-text-top"> Best-Selling
                                            Products</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <form class="d-flex mt-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle " data-bs-toggle="dropdown"
                                aria-expanded="false"><?= $_SESSION['Position'].' : '.$_SESSION['name'];?>
                                <img class="rounded-circle align-text-top" src="png/portrait.png" width="20" height="19">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" type="button" href="show_edit+fr_image_mem.php"><img
                                        src="png/id-badge.png" alt="" width="18" height="18"
                                        class="d-inline-block align-text-top"> About Me</a>

                                <a href="edit_pass.php" class="dropdown-item" type="button"><img src="png/key.png"
                                        alt="" width="18" height="18" class="d-inline-block align-text-top"> Change
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


        <div class="container container-fluid mt-2 ">
            <br>
            <div class="row row-cols-1 row-cols-md-5 g-4 ">
                <?php
                for ($i = 0; $i < 30; $i++) {
                ?>
                <div class="col">
                    <!-- Copy the content below until next comment -->
                    <div class="card card-custom bg-white border-white border-0">
                        
                        <div class="card-custom-img" ><img src="png/icon.png"  width="190" height="190" class="d-inline-block align-text-top">
                        </div>

                        <div class="card-body" style="max-width: 540px;">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Card has </p>
                        </div>
                        <div class="card-footer" style="background: inherit; border-color: inherit;">
                            <a href="#" class="btn btn-primary">Option</a>
                            <a href="#" class="btn btn-outline-primary">Other option</a>
                        </div>
                    </div>

                </div>

                <?php }
                ?>

            </div>
        </div>

<br>
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

<script language="JavaScript">
function Del(mypage) {
    var agree = confirm("ต้องการลบข้อมูลใช่หรือไม่");
    if (agree) {
        window.location = mypage;
    }
}
</script>

<style>
.card-custom {
    overflow: hidden;
    min-height: 100px;
    min-width: 100px;
    box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
}

.card-custom-img {
    height: 200px;
    min-height: 200px;
    background-repeat: 100px;
    background-position: center;
    border-color: inherit;
}

/* First border-left-width setting is a fallback */
.card-custom-img::after {
    position: absolute;
    content: '';
    top: 161px;
    left: 0;
    width: 0;
    height: 0;
    border-style: solid;
    border-top-width: 40px;
    border-right-width: 0;
    border-bottom-width: 0;
    border-left-width: 545px;
    border-left-width: calc(575px - 5vw);
    border-top-color: transparent;
    border-right-color: transparent;
    border-bottom-color: transparent;
    border-left-color: inherit;
}

</style>

