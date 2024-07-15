<?php
include 'condb_store.php';
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
    <title>Form Product</title>
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

<body onLoad="document.product.id_product.focus()">

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
                            <a class="nav-link active" href="import_products.php"><img src="png/truck-side.png"
                                    width="18" height="17" class="d-inline-block align-text-top"> Import Products</a>
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



        <div class="container ">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">

                    <!-- ปุ่มเพิ่ม -->
                    <a href="show_product.php" class="btn btn-1 btn-primary mt-4 mb-2 shadow-sm"><img src="png/back.png"
                            width="25" height="25"></a>
                    <a class="btn btn-success mt-4 mb-2 shadow-sm">Add Product <img src="png/pro.png" alt="" width="25"
                            height="25"></a>

                    <div class="bg-white border rounded p-4 shadow">

                        <form class="row g-3 needs-validation" method="POST" enctype="multipart/form-data"
                            name="product" novalidate>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Product Picture </label>
                                <input class="form-control" type="file" name="file_pro" required>
                                <small class="form-text text-muted">Input file .jpg, .jpeg, .png </small>
                                <div class="invalid-feedback">
                                    Please select a file.
                                </div>
                            </div>


                            <div class="form-group mt-3 mb-2">
                                <label for="inputName">Id Product</label>
                                <input type="text" name="id_product" class="form-control" placeholder="Band-model"
                                    required minlength="5" oninput="this.value=this.value.replace(/[^A-Za-z-]/g,'')"
                                    onblur="checkDuplicateId()">
                                <div id="duplicate-id-alert" class="invalid-feedback" style="display:none">
                                    This ID is already used. Please enter a different ID.
                                </div>
                                <div class="invalid-feedback">
                                    Please enter an ID with at least 5 characters.
                                </div>
                            </div>

                            <div class="form-group mt-3 mb-2">
                                <label for="inputName">Type Product</label>
                                <select type="text" class="form-select mb-1 mt-2" name="Type_code" required>
                                    <option value="" selected>-</option>
                                    <?php $sql = "SELECT * FROM type_code ORDER BY Type_code";
      $hand = mysqli_query($conn,$sql);
      while ($row= mysqli_fetch_array($hand)) {
?>
                                    <option value="<?= $row['Type_code']?>"><?= $row['type_name']?></option>
                                    <?php
}
mysqli_close($conn);
?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a product type.
                                </div>
                            </div>

                            <div class="form-group  mt-3 mb-2">
                                <label for="inputName">Name Product</label>
                                <input type="text" name="name" class="form-control" placeholder="" required
                                    oninput="this.value=this.value.replace(/[^A-Za-z-_]/g,'')">
                                <div class="invalid-feedback">
                                    Please enter a product name.
                                </div>
                            </div>

                            <div class="form-group  mt-3 mb-2">
                                <label for="inputName">Color</label>
                                <input type="text" name="color" class="form-control" placeholder="" required
                                    oninput="this.value=this.value.replace(/[^A-Za-z-]/g,'')">
                                <div class="invalid-feedback">
                                    Please enter a product color.
                                </div>
                            </div>

                            <div class="form-group mt-3 mb-2">
                                <label for="inputName">details</label>
                                <textarea type="text" name="details" class="form-control" placeholder="" required
                                    oninput="this.value=this.value.replace(/[^A-Za-z0-9_.\u0E01-\u0E5B]/g,'')"
                                    minlength="1"></textarea>
                                <div class="invalid-feedback">
                                    Please enter product details.
                                </div>
                            </div>

                            <div class="form-group  mt-3 mb-2">
                                <label for="inputName">Product Highlight</label>
                                <textarea type="text" name="pr_hl" class="form-control" placeholder=""
                                    oninput="this.value=this.value.replace(/[^A-Za-z0-9_.\u0E01-\u0E5B]/g,'')"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Please enter a product highlight.
                                </div>
                            </div>

                            <div class="form-group  mt-3 mb-2">
                                <label for="inputName">Price</label>
                                <input type="number" name="price" class="form-control" placeholder="" required
                                    oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                                <div class="invalid-feedback">
                                    Please enter a product price.
                                </div>
                            </div>

                            <input class="btn btn-success" type="submit" value="Add Product">

                        </form>
                    </div>
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
        </div>

    </body>

</html>

<?php
if (isset($_POST['id_product']) && isset($_POST['Type_code']) && isset($_POST['name']) && isset($_POST['details']) && isset($_POST['pr_hl']) && isset($_POST['color']) && isset($_POST['price'])) {

    include 'condb_store.php';

    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    $id = $_POST['id_product'];
    $Type_code = $_POST['Type_code'];
    $name = $_POST['name'];
    $details = $_POST['details'];
    $pr_hl = $_POST['pr_hl'];
    $color = $_POST['color'];
    $price = $_POST['price'];

    if (is_uploaded_file($_FILES['file_pro']['tmp_name'])) {
        $allowed_exts = array('jpg', 'jpeg', 'png', 'gif');
        $temp = explode(".", $_FILES["file_pro"]["name"]);
        $extension = end($temp);
        $new_imgae_name = 'product_'.uniqid().".".$extension;
        $image_upload_path = "./img/pro/".$new_imgae_name;
        if ((($_FILES["file_pro"]["type"] == "image/jpeg")
        || ($_FILES["file_pro"]["type"] == "image/png"))
        && in_array($extension, $allowed_exts)) {
            move_uploaded_file($_FILES['file_pro']['tmp_name'], $image_upload_path);
        } else {
            echo '<script>
            setTimeout(function() {
            swal({
            title: "Invalid file type",
            text: "Please upload only JPG, JPEG, PNG file types.",
            type: "error",
            timer: 4000,
            showConfirmButton: false
            }, function() {
            window.location = "fr_product.php";
            });
            },500);
            </script>';
            exit;
        }
    } else {
        $new_image_name = "";
    }

    $sql_check = "SELECT * FROM product_details WHERE id_product = '$id'";
    $result_check = mysqli_query($conn, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        echo '<script>
            setTimeout(function() {
                swal({
                    title: "Duplicate ID",
                    text: "This product ID already exists.",
                    type: "error",
                    timer: 4000,
                    showConfirmButton: false
                }, function() {
                    window.location = "fr_product.php";
                });
            }, 500);
        </script>';
        exit;
    }


    $sql ="INSERT INTO product_details (id_product,Type_code,name,details,pr_hl,color,price,image) 
            VALUES('$id','$Type_code','$name','$details','$pr_hl','$color','$price','$new_imgae_name')";
    $result = mysqli_query($conn,$sql);

    if ($result) {
        echo '<script>
        setTimeout(function() {
            swal({
                title: "Successfully added product",
                type: "success",
                timer: 2000,
                showConfirmButton: false
            }, function() {
                window.location = "show_product.php"; //หน้าที่ต้องการให้กระโดดไป
            });
    },500);
    </script>';
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
    window.location = "fr_product.php"; //หน้าที่ต้องการให้กระโดดไป
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

<script>
function checkDuplicateId() {
    var idProduct = document.getElementsByName("id_product")[0].value;

    // Make an AJAX request to check if the ID is already used
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            var alert = document.getElementById("duplicate-id-alert");
            if (response.isDuplicate) {
                alert.style.display = "block";
            } else {
                alert.style.display = "none";
            }
        }
    };
    xhr.open("POST", "check_duplicate_id.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("id_product=" + idProduct);
}
</script>