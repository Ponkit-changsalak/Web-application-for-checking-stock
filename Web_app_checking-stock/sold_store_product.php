<?php
include 'condb_store.php';

$id = $_GET['id'];
$sql="SELECT * FROM store_product_ WHERE id_store = '$id' ";
$result= mysqli_query($conn,$sql);
$row =  mysqli_fetch_array($result);



?>

<?php
session_start();
$Sellerss = $_SESSION['id'];
echo '
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
//เช็คว่ามีตัวแปร session อะไรบ้าง
//print_r($_SESSION['Position']);
//exit();
//สร้างเงื่อนไขตรวจสอบสิทธิ์การเข้าใช้งานจาก session

 if($_SESSION['Position'] != 'Admin' ){
            echo 
            '<script>
                setTimeout(function() {
                swal({
                title: "กำลังเข้า Member",
                type: "success",
                timer: 2000,
                showConfirmButton: false
                }, function() {
                window.location = "show_member_notadmin.php"; //หน้าที่ต้องการให้กระโดดไป
                });
                },500);
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

<style>
.btn {
    min-width: 100px;
}
</style>

<!--clock-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sold Store+Product</title>
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
    font-size: 15px;
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

        <div class="container container-fluid mt-2">
            <div class="row">
                <div class="col col-2"></div>
                <div class="col-8 mt-2 ">
                    <div class="col text-center ">
                        <h1 class="text-dark">
                            Store-<?=$id?>
                            <!-- ปุ่มเพิ่ม -->

                        </h1>

                        <!-- ตั้งค่าตัวหนังสือกลาง -->
                        <div class="text-center">

                            <div class="bg-white border rounded p-4 shadow">
                                <form method="POST" action="sell_store_product.php">

                                    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                                        <table class="table caption-top table-striped ">
                                            <thead class="table-dark text-center ">
                                                <tr>
                                                    <th>Id Product</th>
                                                    <th>Store Remaining Amount</th>
                                                    <th>Sold Amount</th>
                                                    <div>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                //query data
                                                 include 'condb_store.php';
                                                 require_once 'connect_product.php';
                                                 $stmt =  $conn->prepare("DELETE FROM store_product_ WHERE amount <= 0");
                                                 $stmt->execute();

                                                 $stmt = $conn->prepare("SELECT s.id_store,s.id_product,s.amount,p.price
                                                                        FROM store_product_ AS s
                                                                        inner join product_details AS p
                                                                        ON s.id_product = p.id_product WHERE id_store = '$id' ");
                                                 $stmt->execute();
                                                 $result = $stmt->fetchAll(); 
                                                 $i= ' ฿';
                                                ?>

                                                <?php foreach ($result as $rows){ ?>
                                                <tr>
                                                    <input type="hidden" class="form-control" name="Seller"
                                                        value=<?php echo $Sellerss;?>>

                                                    <input type="hidden" class="form-control" name="id_store[]"
                                                        value=<?php echo $rows["id_store"];?>>

                                                    <td><input type="text" class="form-control" name="id_product[]"
                                                            readonly value=<?php echo $rows["id_product"]; ?>></td>

                                                    <td><input type="number" class="form-control" readonly
                                                            value=<?php echo $rows["amount"]; ?>></td>
                                                    
                                                    <input type="hidden" class="form-control" name="price[]" readonly
                                                            value=<?php echo $rows["price"];?>>

                                                    <td><input type="number" class="form-control" name="amount_sold[]"
                                                            placeholder="Amount" min="0"
                                                            max="<?php echo $rows["amount"]; ?>"></td>
                                                    </td>
                                                </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                        <div class="container">
                                            <a class="text-danger alert-danger">**Please check the remaining amount of
                                                the product before pressing update...</a>
                                        </div>

                                        <input class="btn btn-success mt-2" type="submit" value="Update Sold ">
                                    </div>
                            </div>
                            <!-- End Form -->
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <!--ข้อความหลัง -->

            <div class="my-4 text-muted text-center">
                <p><img src="png/db.png" alt="" width="19" height="18" class="d-inline-block align-text-top"> PROJECT
                    DATA BASE / TIME NOW :
                    <!--clock-->
                    <h5.5 id="currentTime"></h5.5>
                </p>
            </div>
        </div>

</html>
