<?php
include 'condb_store.php';

$id_store = $_GET['id_store'];

$sql="SELECT * FROM store WHERE id_store = '$id_store' ";
$result= mysqli_query($conn,$sql);
$row =  mysqli_fetch_array($result);


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
 if(empty($_SESSION['id']) && empty($_SESSION['id']) && empty($_SESSION['surname'])){
            echo '<script>
                setTimeout(function() {
                swal({
                title: "คุณไม่มีสิทธิ์ใช้งานหน้านี้",
                type: "error"
                window.location = "show_type.php"; //หน้าที่ต้องการให้กระโดดไป
                });
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

    .btn {
    min-width: 20px;
    }

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
    <title>Edit Store</title>
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


        <div class="container container-fluid mt-2">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 mt-2 ">
                    <!-- ปุ่มเพิ่ม d-->
                    <a href="show_store.php" class="btn btn-1 btn-primary mt-4 mb-2 shadow-sm"><img src="png/back.png"
                            width="25" height="25"></a>
                    <a class="btn btn-warning mt-4 mb-2 shadow-sm text-white">Edti <img src="png/store-w.png" width="25" height="25"></a>

                    <div class="bg-white border rounded p-4 shadow">
                        
                        <form class="row g-3 " method="POST" enctype="multipart/form-data">

                                <input value="<?=$row['image'];?>" type="hidden" name="image_old">

                            <div class="mb-3">
                                <img src="img/store/<?= $row['image'];?>" class="form-control">
                                <small class="form-text text-muted d-flex"><?= $row['image'];?></small>
                            </div>

                            <div class="form-group mt-1 mb-2">
                                <label for="validationCustom01" class="form-label">Id Store</label>
                                <input type="text" name="id_store"
                                    class="form-control form-control-color bg-Secondary shadow-sm text-white"
                                    value=<?=$row['id_store']?> readonly>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Store Picture </label>
                                <input class="form-control" type="file" name="file_store">
                                <small class="form-text text-muted">Input file .jpg, .jpeg, .png </small>
                            </div>

                            <div class="form-group mt-1 mb-2">
                                <label class="form-label">Store Name<span style="color:red"> *</span></label>
                                <input type="text" name="name_store" class="form-control" placeholder="Province Name"
                                    required minlength="3" value='<?=$row['name_store']?>'
                                    oninput="this.value=this.value.replace(/[^A-Za-z0-9_.]/g,'')">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a valid input.
                                </div>
                            </div>

                            <div class="form-group mt-1 mb-2">
                                <label class="form-label">Store Address<span style="color:red"> *</span></label>
                                <input type="text" name="address_store" class="form-control" placeholder="Store Address"
                                    required minlength="3" value='<?=$row['address_store']?>'
                                    oninput="this.value=this.value.replace(/[^A-Za-z0-9_. ]/g,'')">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please fill in the address
                                </div>
                            </div>

                            <input type="hidden" name="pic" value='<?=$row['image']?>'>
                            <input class="btn btn-success" type="submit" value="Update">
                    </div>
                </div>
            </div>

            </form>
        </div>
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
if(isset($_POST['id_store']) && isset($_POST['name_store']) && isset($_POST['address_store'])){
include 'condb_store.php';

$id_store = $_POST['id_store'];
$name_store = $_POST['name_store'];
$address_store = $_POST['address_store'];
$image_old = $_POST['image_old'];

if (isset($_FILES['file_store']) && is_uploaded_file($_FILES['file_store']['tmp_name'])) {
    // check if uploaded file is an image
    if (exif_imagetype($_FILES['file_store']['tmp_name']) !== false) {
        // generate a new image name
        $new_imgae_name = 'store_'.uniqid().".".pathinfo(basename($_FILES['file_store']['tmp_name']), PATHINFO_EXTENSION);
        $image_upload_path = "./img/store/".$new_imgae_name;
        move_uploaded_file($_FILES['file_store']['tmp_name'], $image_upload_path);
        $image = $new_imgae_name;
    } else {
        // show error message if uploaded file is not an image
        echo '<script>
        setTimeout(function() {
        swal({
        title: "Invalid file type",
        text: "Please upload only JPG, JPEG, PNG file types.",
        type: "error",
        timer: 4000,
        showConfirmButton: false
        }, function() {
            window.location = "edit_store.php?id_store='.$id_store.'";
        });
        },500);
        </script>';
        exit;
    }
} else {
    // use the old image if no new image is uploaded
    $image = $image_old;
}

$sql = "UPDATE store SET name_store ='$name_store',address_store ='$address_store',image ='$image'
        WHERE id_store ='$id_store' ";

if(mysqli_query($conn,$sql)){

            $sql = "SELECT * FROM store ";
            $result = mysqli_query($conn, $sql);
            $file_names = array();
            while ($row = mysqli_fetch_assoc($result)) {
            $file_names[] = $row['image'];
            }
            $directory = 'C:\xampp\htdocs\webdb\img\store';
            $files = scandir($directory);
            $message = array();
            foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                if (!in_array($file, $file_names)) {
                $file_path = "C:/xampp/htdocs/webdb/img/store/" . $file;
            if (file_exists($file_path)) {
            if (unlink($file_path)) {
            } else {
            }
            }
                }
            }else{
                echo '<script>
                        setTimeout(function() {
                        swal({
                        title: "Edited data successfully",
                        type: "success",
                        timer: 2000,
                        showConfirmButton: false
                        }, function() {
                        window.history.back(); //หน้าที่ต้องการให้กระโดดไป
                        });
                        },500);
                        </script>';
            }
            }
    }else{
        echo '<script>
        setTimeout(function() {
        swal({
        title: "เกิดข้อผิดพลาด",
        text: "โปรดติดต่อ : Admin",
        type: "error",
        timer: 2000,
        showConfirmButton: false
        }, function() {
        window.location = "show_product.php"; //หน้าที่ต้องการให้กระโดดไป
        });
        },500);
        </script>';
        }
    }
?>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);

            // Add a event listener for each input field
            form.querySelectorAll("input").forEach(function(input) {
                input.addEventListener("input", function() {
                    if (input.checkValidity()) {
                        input.classList.add("is-valid");
                        input.classList.remove("is-invalid");
                    } else {
                        input.classList.add("is-invalid");
                        input.classList.remove("is-valid");
                    }
                });
            });
        });
    });
})();
</script>

<style>
.toggle-password {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    cursor: pointer;
}

.form-control {
    position: relative;
}

.form-control .fa-eye-slash {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #28a745;
}

.was-validated .valid-feedback,
.was-validated .valid-tooltip {
    display: block !important;
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545;
}

.was-validated .invalid-feedback,
.was-validated .invalid-tooltip {
    display: block !important;
}
</style>