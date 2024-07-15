<?php

if(isset($array['search_query_pice'])){
    // do something with $array['search_query_pice']
}





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
    <title>Product</title>
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
            <div class="row justify-content-md-center">
                <div class="col col-lg-5 mt-3">
                    <form class="d-flex" role="search" method="post">
                        <input class="form-control me-2 shadow" type="search" placeholder="Search...name,band,model"
                            aria-label="Search" name="search_query" value="<?=$_POST['search_query']?>">
                </div>
                <div class="col col-lg-2 mt-2">
                    <select type="text" class="form-select btn-2 mb-1 mt-2 shadow" name="search_query_pice">
                        <option value="">Price <?=$_POST['search_query_pice']?></option>
                        <option value="0-1000 THB">0-1,000 THB</option>
                        <option value="1000-5000 THB">1,000-5,000 THB</option>
                        <option value="5000-10000 THB">5,000-10000 THB</option>
                        <option value="10000+ THB">10000+ THB</option>
                        <!--selected-->
                    </select>

                </div>
                <div class="col col-lg-2 mt-3">
                    <button class="btn btn-3 btn-primary btn-lg shadow" type="submit">
                        <img src="png/search.png" width="17" height="18" class="align-text-top"> </button>
                </div>
                <div class="col col-lg-2 mt-3">
                </div>
            </div>
        </div>
        </div>


        <div class="container container-fluid mt-2 ">

            <div class="row justify-content-md-center">

            </div>

            <div class="row row-cols-1 row-cols-md-5 g-4 ">

                <?php

            $search_query = $_POST['search_query'];
            $search_query_pice = $_POST['search_query_pice'];

            include 'condb_store.php';

            if($search_query_pice == "0-1000 THB"){
                $sql = "SELECT * FROM `product_details` 
                        INNER JOIN `type_code` ON `product_details`.`Type_code` = `type_code`.`Type_code`
                        WHERE (`price` BETWEEN 0 AND 1000) AND (type_name LIKE '%$search_query%' OR name LIKE '%$search_query%')";
            }else if($search_query_pice == "1000-5000 THB"){
                $sql = "SELECT * FROM `product_details` 
                        INNER JOIN `type_code` ON `product_details`.`Type_code` = `type_code`.`Type_code`
                        WHERE (`price` BETWEEN 1000 AND 5000) AND (type_name LIKE '%$search_query%' OR name LIKE '%$search_query%')";
            }else if($search_query_pice == "5000-10000 THB"){
                $sql = "SELECT * FROM `product_details` 
                        INNER JOIN `type_code` ON `product_details`.`Type_code` = `type_code`.`Type_code`
                        WHERE (`price` BETWEEN 5000 AND 10000) AND (type_name LIKE '%$search_query%' OR name LIKE '%$search_query%')";
            }else if($search_query_pice == "10000+ THB"){
                $sql = "SELECT * FROM `product_details` 
                        INNER JOIN `type_code` ON `product_details`.`Type_code` = `type_code`.`Type_code`
                        WHERE (`price` BETWEEN 10000 AND 100000) AND (type_name LIKE '%$search_query%' OR name LIKE '%$search_query%')";
            }else{
                $sql = "SELECT * FROM product_details INNER JOIN `type_code` ON `product_details`.`Type_code` = `type_code`.`Type_code`
                        WHERE type_name LIKE '%$search_query%' OR name LIKE '%$search_query%'";
            }

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                // Output data
            while($row = mysqli_fetch_assoc($result)) {
            ?>

                <div class="col">
                    <!-- Copy the content below until next comment -->
                    <div class="card card-custom bg-white border-white border-0">

                        <div class="text-center">
                            <small class="form-text text-muted mt-2 mb-2"><?=$row['id_product']?></small>
                        </div>

                        <div class="card-custom-img"><img src="img/pro/<?= $row['image'];?>" width="190" height="190"
                                class="d-inline-block align-text-top">
                        </div>

                        <div class="card-body" style="max-width: 540px;">

                            <h5 class="card-title"><?= $row['name'];?> / [<?= $row['type_name'];?>]</h5>
                            <p class="card-text  text-primary alert-link">฿<?= $row['price'];?>.</p>
                            <a href="show_in_product.php?id=<?=$row["id_product"]?>" class="btn btn-dark ">Other...</a>
                        </div>
                    </div>

                </div>

                <?php }
                
                  } else {?>

                <div class="container container-fluid ">
                    <div class="row">
                        <div class="col col-5">
                        </div>
                        </div>
                        <div class="col col-lg-3 mt-5">
                            <h3>Product not found...<h3>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <?php
                  }

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
    border-top-width: 0;
    border-right-width: 0;
    border-bottom-width: 0;
    border-left-width: 545px;
    border-left-width: calc(575px - 5vw);
    border-top-color: transparent;
    border-right-color: transparent;
    border-bottom-color: transparent;
    border-left-color: inherit;
}

.btn-1 {
    min-width: 350px;
    position: relative;
    margin-left: -140px;

}

.btn-2 {
    position: relative;
    margin-left: -22px;
}

.btn-3 {
    position: relative;
    margin-left: -38px;
}

.btn-4 {
    position: relative;
    margin-right: -100px;
}
</style>

<script language="JavaScript">
function Del(mypage) {
    var agree = confirm("ต้องการลบข้อมูลใช่หรือไม่");
    if (agree) {
        window.location = mypage;
    }
}
</script>