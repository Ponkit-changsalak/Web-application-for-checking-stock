
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500&amp;subset=latin-ext" rel="stylesheet">
    <link rel="shortcut icon" href="png/icon.png" />
</head>

<body onLoad="document.login.username.focus()">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="png/icon.png" width="58" height="50" class="d-inline-block align-text-top">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand">Check store</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active mt-1" aria-current="page" href="features_web.php">features website</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- **************** -->
    <style>
    .btn-xl {
        padding: 10px 20px;
        font-size: 20px;
        border-radius: 10px;
        width: 50%; //Specify your width here
    }
    </style>

    <style>
    .btn {
        min-width: 200px;
    }
    </style>

    <style>
    /* CSS */
    .button-63 {
        align-items: center;
        background-image: linear-gradient(144deg, #AF40FF, #5B42F3 45%, #00DDEB);
        border: 0;
        border-radius: 8px;
        box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
        box-sizing: border-box;
        color: #FFFFFF;
        display: flex;
        font-size: 20px;
        justify-content: center;
        line-height: 1em;
        max-width: 100%;
        min-width: 120px;
        padding: 19px 24px;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
        cursor: pointer;
    }

    .button-63:active,
    .button-63:hover {
        outline: 0;
    }

    @media (min-width: 600px) {
        .button-63 {
            font-size: 18px;
            min-width: 150px;
            min-height: px;
        }
    }
    </style>

    <style>
    .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
                hsl(218, 41%, 35%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
    }
    </style>
    <section class="background-radial-gradient overflow-hidden">

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Web Application
                        <span style="color: hsl(218, 81%, 75%)">Check Stock</span>
                    </h1>

                    <h5 class="opacity-70" style="color: hsl(218, 81%, 85%)">
                        Product Management System
                    </h5>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">

                            <form name="login" method="post">
                                <div class="text-center">

                                    <img src="png/icon.png" width="90" height="80">
                                </div><br>

                                <!-- username input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label alert-link" for="form3Example3">Username</label>
                                    <input type="text" name="username" class="form-control" required minlength="3"
                                        placeholder="username">
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label alert-link" for="form3Example4">Password</label>
                                    <input type="password" name="password" class="form-control" required minlength="3"
                                        placeholder="password">
                                </div>

                                <div class="container">
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-auto">
                                            <button type="submit" class="btn btn-dark ">Login</button>
                                        </div>
                                    </div>

                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


</body>

</html>


<?php

  //print_r($_POST); //ตรวจสอบมี input อะไรบ้าง และส่งอะไรมาบ้าง 
 //ถ้ามีค่าส่งมาจากฟอร์ม
    if(isset($_POST['username']) && isset($_POST['password']) || isset($_POST['Position'])){
    // sweet alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    //ไฟล์เชื่อมต่อฐานข้อมูล
    require_once 'connect.php';


    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $username = $_POST['username'];
    $password = $_POST['password']; //เก็บรหัสผ่านในรูปแบบ sha1 

    //check username  & password
      $stmt = $conn->prepare("SELECT * FROM tbl_member WHERE username = :username AND password = :password ");
      $stmt->bindParam(':username', $username , PDO::PARAM_STR);
      $stmt->bindParam(':password', $password , PDO::PARAM_STR);

      $stmt->execute();

      //กรอก username & password ถูกต้อง
      if($stmt->rowCount() == 1){
        //fetch เพื่อเรียกคอลัมภ์ที่ต้องการไปสร้างตัวแปร session
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        //สร้างตัวแปร session
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['Position'] = $row['Position'];
        $_SESSION['password'] = $row['password'];

        //เช็คว่ามีตัวแปร session อะไรบ้าง
        //print_r($_SESSION);

       // exit();

       echo '<script>
            setTimeout(function() {
            swal({
            title: "ยินดีต้อนรับ", 
            text: "กำลังเข้าสู่ระบบ PROJECT DATA BASE...", 
            type: "success", //success, warning, danger
            timer: 1500, //
            showConfirmButton: false 
                }, function(){
            window.location.href = "main.php"; 
            });
            });
            </script>';

      }else{ //ถ้า username or password ไม่ถูกต้อง
        echo '<script>
            setTimeout(function() {
            swal({
            title: "เกิดข้อผิดพลาด", 
            text: "Username หรือ Password ไม่ถูกต้อง ลองใหม่อีกครั้ง", 
            type: "warning", //success, warning, danger
            timer: 2500, //
            showConfirmButton: false 
                }, function(){
            window.location.href = "login.php"; 
            });
            });
            </script>';
              $conn = null; //close connect db
            } //else
    } //isset 
    //devbanban.com
?>

<script>
function password_show_hide() {
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}
</script>
