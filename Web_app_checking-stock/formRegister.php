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
                title: "คุณไม่มีสิทธิ์ใช้งานหน้านี้",
                type: "error"
                }, function() {
                window.location = "Home_admin.php"; //หน้าที่ต้องการให้กระโดดไป
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
    <title>Form Register By Admin</title>
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

.btn {
    min-width: 20px;
}
</style>

<body onLoad="document.member.name.focus()">

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


                <a href="fr_image_mem.php"><img class="rounded-circle align-text-top" src="img/mem/<?=$row["image"]?>"
                        width="30" height="30"> </a>

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
                    <!-- ปุ่มเพิ่ม -->
                    <a href="show_store.php" class="btn  btn btn-primary mt-4 mb-2 shadow-sm"><img src="png/back.png"
                            width="25" height="25"></a>
                    <a class="btn btn-success mt-4 mb-2 shadow-sm">Add <img src="png/add-user.png" alt="" width="25"
                            height="25"></a>

                    <div class="bg-white border rounded p-4 shadow">

                        <form class="row g-3 needs-validation" method="POST" name="member">

                            <div class="form-group  mb-3">
                                <label for="validationCustom01" class="form-label">Fist Name<span style="color:red">
                                        *</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Your Fist Name"
                                    required oninput="this.value=this.value.replace(/[^A-Za-zก-ฮ]/g,'')">
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
                                    required oninput="this.value=this.value.replace(/[^A-Za-zก-ฮ]/g,'')">
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
                                    oninput="this.value=this.value.replace(/[^A-Za-zก-ฮ0-9-/. ]/g,'')">
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
                                    maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
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


                            <div class="form-group mt-4 mb-3">
                                <label class="form-label">Username<span style="color:red"> *</span></label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required
                                    minlength="3" oninput="this.value=this.value.replace(/[^A-Za-z0-9_.]/g,'')">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-3">
                                <label class="form-label">Password<span style="color:red"> *</span></label>
                                <input type="password" name="password" id="txtPassword" class="form-control"
                                    placeholder="Password" required min="8"
                                    oninput="this.value=this.value.replace(/[^A-Za-z0-9_.]/g,'')">
                            </div>

                            <div class="form-group mt-2 mb-3">
                                <label class="form-label">Confirm Password<span style="color:red"> *</span></label>
                                <input type="password" name="password_ch" id="txtConfirmPassword" class="form-control"
                                    placeholder="Password" required minlength="8"
                                    oninput="this.value=this.value.replace(/[^A-Za-z0-9_.]/g,'')"
                                    onkeyup="checkPasswordMatch();">
                                <div id="divCheckPasswordMatch"></div>
                            </div>


                            <div class="form-group mt-2 mb-3">
                                <label class="form-label">Job Positions<span style="color:red"> *</span></label>
                                <select type="text" class="form-select mb-3 mt-2" name="Position">
                                    <option>-</option>
                                    <option value="HR" d>HR (Human Resources)</option>
                                    <option value="GM">GM (General Manager)</option>
                                    <option value="Sale">Sale (Sales representative)</option>
                                    <option value="Admin"> Admin (System Administeator)</option>
                                </select>
                            </div>
                            <input class="btn btn-success" type="submit" value="Add Member">

                    </div>
                    </form>
                </div>
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

  //print_r($_POST); //ตรวจสอบมี input อะไรบ้าง และส่งอะไรมาบ้าง 
  if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['password'])){
 //ถ้ามีค่าส่งมาจากฟอร์ม
    
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    //ไฟล์เชื่อมต่อฐานข้อมูล
    require_once 'connect.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password']; //เก็บรหัสผ่านในรูปแบบ sha1
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $Position = $_POST['Position'];
    $password_ch = $_POST['password_ch'];



    //check duplicat
      $stmt = $conn->prepare("SELECT id FROM tbl_member WHERE username = :username");
      $stmt->bindParam(':username', $username , PDO::PARAM_STR);
      $stmt->execute(array(':username' => $username));
      //ถ้า username ซ้ำ ให้เด้งกลับไปหน้าสมัครสมาชิก ปล.ข้อความใน sweetalert ปรับแต่งได้ตามความเหมาะสม
      if($stmt->rowCount() > 0){
          echo '<script>
          setTimeout(function() {
          swal({
            title: "Username duplicate !!", //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
            text: "Please try again.", //ข้อความเปลี่ยนได้ตามการใช้งาน
            type: "warning", //success, warning, danger
            timer: 2500, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
            showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
              }, function(){
            window.location.href = "formRegister.php"; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
            });
            });
          </script>';

      }else if($password != $password_ch){
        echo '<script>
            swal({
            title: "Password did not match",
            text: "Please try again...",
            type: "warning",
            timer: 2500,
            showConfirmButton: false
                });
            </script>'; 

    }else { //ถ้า username ไม่ซ้ำ เก็บข้อมูลลงตาราง
              //sql insert

              $stmt = $conn->prepare("INSERT INTO tbl_member (name, surname, username, password, address, phone, Position)
              VALUES (:name, :surname, :username, :password , :address, :phone, :Position )");
              $stmt->bindParam(':name', $name, PDO::PARAM_STR);
              $stmt->bindParam(':surname', $surname , PDO::PARAM_STR);
              $stmt->bindParam(':username', $username , PDO::PARAM_STR);
              $stmt->bindParam(':password', $password , PDO::PARAM_STR);
              $stmt->bindParam(':address',  $address , PDO::PARAM_STR);
              $stmt->bindParam(':phone'  , $phone , PDO::PARAM_STR);
              $stmt->bindParam(':Position', $Position , PDO::PARAM_STR);
              $result = $stmt->execute();

              try {
                
                $name_add_ac = $_POST['name'];
                $stmt = $conn->prepare("SELECT id FROM tbl_member WHERE name = :name");
                $stmt->bindParam(':name', $name_add_ac, PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $id = $result['id'];

                $stmt = $conn->prepare("INSERT INTO `access` (`id`, `home_ac`, `member_ac`, `store_ac`, `product_ac`, `type_ac`)
                                        VALUES (:id, 'off', 'off', 'off', 'off', 'off')");

                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();

                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }

              if($result){
                    echo '<script>
                  setTimeout(function() {
                  swal({
                    title: "Successfully added members!", //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                    text: "Redirecting in 3 seconds.", //ข้อความเปลี่ยนได้ตามการใช้งาน
                    type: "success", //success, warning, danger
                    timer: 2500, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                    showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                      }, function(){
                    window.location.href = "show_member.php"; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                    });
                    });
                  </script>';
              }else{
                 echo '<script>
                 setTimeout(function() {
                 swal({
                   title: "เกิดข้อผิดพลาด!", //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                   text: "Redirecting in 3 seconds.", //ข้อความเปลี่ยนได้ตามการใช้งาน
                   type: "error", //success, warning, danger
                   timer: 2500, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                   showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                     }, function(){
                   window.location.href = "formRegister.php"; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                   });
                   });
                 </script>';
              }
              $conn = null; //close connect db
        } //else chk dup
    } //isset 
    //devbanban.com
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