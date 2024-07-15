<?php
include 'condb.php';

$id = $_GET['id'];
$sql="SELECT * FROM tbl_member WHERE id= '$id' ";
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
    <title>Edit Member</title>
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
                    <a href="show_member.php" class="btn btn-1 btn-primary mt-4 mb-2 shadow-sm"><img src="png/back.png"
                            width="25" height="25"></a>
                    <a class="btn btn-warning mt-4 mb-2 shadow-sm text-white">Edit <img src="png/edit.png" width="25"
                            height="25"></a>

                    <div class="bg-white border rounded p-4 shadow">
                        <form class="row g-3 needs-validation" method="POST">

                            <div class="form-group mt-1 mb-2">
                                <label for="validationCustom01" class="form-label">ID</label>
                                <input type="text" name="id_mem"
                                    class="form-control form-control-color bg-Secondary shadow-sm text-white"
                                    value=<?=$row['id']?> readonly>
                            </div>

                            <div class="form-group  mb-3">
                                <label for="validationCustom01" class="form-label">Fist Name<span style="color:red">
                                        *</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Your Fist Name"
                                    required oninput="this.value=this.value.replace(/[^A-Za-zก-ฮ]/g,'')" value=<?=$row['name']?>>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a valid input.
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-3">
                                <label class="form-label">Last Name<span style="color:red"> *</span></label>
                                <input type="text" name="surname" class="form-control" placeholder="Your Last Name"
                                    required oninput="this.value=this.value.replace(/[^A-Za-zก-ฮ]/g,'')" value=<?=$row['surname']?>>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a valid input.
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-3">
                                <label class="form-label">address<span style="color:red"> *</span></label>
                                <input type="text" name="address" class="form-control" placeholder="address" required
                                    oninput="this.value=this.value.replace(/[^A-Za-zก-ฮ0-9-/. ]/g,'')" value=<?=$row['address']?>>
                                <div class="valid-feedback">
                                    Input is valid!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-3">
                                <label class="form-label">Phone<span style="color:red"> *</span></label>
                                <input type="text" name="phone" class="form-control" placeholder="+66XXXXXXXX" required
                                    maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'')" value=<?=$row['phone']?>>
                                <div class="valid-feedback">
                                    Input is valid!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter the phone number as shown in the form.
                                </div>
                            </div>

                            <!--ขั้น-->
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>


                            <div class="form-group mt-2 mb-3">
                                <label class="form-label">Password<span style="color:red"> *</span></label>
                                <input type="password" name="password" id="txtPassword" class="form-control"
                                    placeholder="Password" required min="8"
                                    oninput="this.value=this.value.replace(/[^A-Za-z0-9_.]/g,'')" value=<?=$row['password']?>>
                            </div>

                            <div class="form-group mt-2 mb-3">
                                <label class="form-label">Confirm Password<span style="color:red"> *</span></label>
                                <input type="password" name="password_ch" id="txtConfirmPassword" class="form-control"
                                    placeholder="Password" required minlength="8"
                                    oninput="this.value=this.value.replace(/[^A-Za-z0-9_.]/g,'')"
                                    onkeyup="checkPasswordMatch();" value=<?=$row['password']?>>
                                <div id="divCheckPasswordMatch"></div>
                            </div>


                            <div class="form-group mt-2 mb-3">
                                <label class="form-label">Job Positions<span style="color:red"> *</span></label>
                                <select type="text" class="form-select mb-3 mt-2" name="Position">
                                    <option value="<?=$row['Position']?>" ><?=$row['Position']?></option>
                                    <option value="HR" >HR (Human Resources)</option>
                                    <option value="GM">GM (General Manager)</option>
                                    <option value="Sale">Sale (Sales representative)</option>
                                    <option value="Admin"> Admin (System Administeator)</option>
                                </select>
                            </div>
                            <input class="btn btn-success" type="submit" value="Update Member">

                    </div>
                    </form>
            </div>
        </div>
        </div>
        </div>

        <!--ข้อความหลัง -->

        <div id="footer">
            <div class="my-4 text-muted text-center">
                <p>© PROJECT DATA BASE</p>
            </div>
        </div>
        </div>

    </body>

</html>

<?php

if(isset($_POST['id_mem']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['address']) 
    && isset($_POST['phone'])  && isset($_POST['password']) && isset($_POST['Position'])){

include 'condb.php';

$id = $_POST['id_mem'];
$F_name = $_POST['name'];
$L_name = $_POST['surname'];
$address = $_POST['address'];
$tel = $_POST['phone'];
$password = $_POST['password'];
$Position = $_POST['Position'];


$sql = "UPDATE tbl_member SET name='$F_name',surname='$L_name' ,address='$address',phone='$tel' ,password='$password' ,Position='$Position'
        WHERE id ='$id' ";



if(mysqli_query($conn,$sql)){
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    echo '<script>
    setTimeout(function() {
    swal({
    title: "เเก้ไขข้อมูลสำเร็จ",
    type: "success",
    timer: 2000,
    showConfirmButton: false
    }, function() {
    window.location = "show_member.php"; //หน้าที่ต้องการให้กระโดดไป
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




function checkPasswordMatch() {
    var password = document.getElementById("txtPassword").value;
    var confirmPassword = document.getElementById("txtConfirmPassword").value;
    var passwordInput = document.getElementById("txtPassword");
    var confirmPasswordInput = document.getElementById("txtConfirmPassword");

    if (password != confirmPassword) {
        document.getElementById("divCheckPasswordMatch").innerHTML = "Passwords do not match!";
        document.getElementById("divCheckPasswordMatch").style.color = "red";
        passwordInput.setCustomValidity("Passwords do not match!");
        confirmPasswordInput.setCustomValidity("Passwords do not match!");
        confirmPasswordInput.classList.add("is-invalid");
    } else {
        document.getElementById("divCheckPasswordMatch").innerHTML = "Passwords match.";
        document.getElementById("divCheckPasswordMatch").style.color = "green";
        passwordInput.setCustomValidity("");
        confirmPasswordInput.setCustomValidity("");
        confirmPasswordInput.classList.remove("is-invalid");
    }
}
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