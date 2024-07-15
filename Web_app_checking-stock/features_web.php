<!--clock-->
<style>
.btn {
    min-width: 100px;
}
</style>

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
    <title>features Web</title>
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
                            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                        </li>
                </div>
            </div>
        </nav>

        <!-- **************** -->

        <div class="container container-fluid mt-4">
            <div class="row ">
                <h1 class=" text-dark">
                    features website
                </h1>
                <div class="col">

                    <div class="bg-white border rounded p-4 shadow">
                        <div class="container">
                            <div class="row ">
                                <div class="col shadow p-4">
                                    <h2 class=" text-dark">
                                        <span style="color:red">* </span>Front-end
                                    </h2>
                                    <h4 class=" text-dark">+ html5 ,bootstrap ,CSS ,javascript</h4>
                                    <h4 class=" text-dark">*- กำหนด title หน้าเว็ป</h4>
                                    <h4 class=" text-dark">*- icon</h4>
                                    <h4 class=" text-dark">*- focus() ของ form</h4>
                                    <h4 class=" text-dark"></h4>
                                    <span
                                        style="color:red">---------------------------------------------------------------</span>
                                    <h4 class=" text-dark"># form<h4>
                                            <h4 class=" text-dark">-innsert,edit ทุก table</h4>
                                            <h4 class=" text-dark"> ✓- Validation feedback</h4>
                                            <h4 class=" text-dark"> - เช็ค input ค่าว่าง</h4>
                                            <h4 class=" text-dark"> - เช็ค input select .js</h4>
                                            <h4 class=" text-dark"> - กำหนดชนิด input = A-z, ก-ฮ, 0-9</h4>
                                            <span
                                                style="color:red">---------------------------------------------------------------</span>
                                            <h4 class=" text-dark">#Features</h4>
                                            <h4 class=" text-dark"> *- เเจ้งเตือน .sweetalert</h4>
                                            <h4 class=" text-dark"> - ถามก่อนลบ .js</h4>
                                            <h4 class=" text-dark"> *- add row เพื่อ input form multi .js </h4>
                                            <h4 class=" text-dark"> *- Dashboard Chart.js</h4>
                                            <h4 class=" text-dark"> - scrollbar-table </h4>
                                            <h4 class=" text-dark"> *- search table .jquery</h4>
                                            <h4 class=" text-dark"> - เเจ้ง Not Found</h4>
                                            <h4 class=" text-dark"> ✓- view :฿ </h4>

                                            <br></br>
                                </div>
                                <div class="col col-1"> </div>
                                <div class="col shadow p-4">
                                    <h3 class=" text-dark">
                                        <span style="color:red">* </span>Back-end
                                    </h3>
                                    <h4 class=" text-dark">+ php+sql ,javascript</h4>
                                    <h4 class=" text-dark">*- สิทธิ์การเข้าถึงตามตำเเหน่ง Member<h4>
                                            <h4 class=" text-dark">*- สั่งลบไฟล์ขยะ file_exists() unlink().php<h4>
                                                    <h4 class=" text-dark">// Sql Query เเสดงสถิติต่างๆผ่าน Dashboard
                                                        <h4>
                                                            <h4 class=" text-dark">// นำ data มาหากำไรที่ได้จากการขาย
                                                                <h4>
                                                                    <span
                                                                        style="color:red">------------------------------------------------------------</span>
                                                                    <h4 class=" text-dark"># form<h4>
                                                                            <h4 class=" text-dark"> *-
                                                                                mysqli_multi_query<h4>
                                                                                    <h4 class=" text-dark"> *- การเช็ค
                                                                                        input file
                                                                                        image .js</h4>
                                                                                    <h4 class=" text-dark"> ✓-
                                                                                        การเช็คข้อมูลซ้ำ
                                                                                    </h4>
                                                                                    <h4 class=" text-dark"> *- การเช็ค
                                                                                        Confirm
                                                                                        Password .js</h4>
                                                                                    <h4 class=" text-dark"> *- update
                                                                                        table
                                                                                        product_details(quantity)
                                                                                        เมื่อมีการ
                                                                                        นำเข้า,เเละนำออก</h4>
                                                                                    <h4 class=" text-dark"> ✓- on delete
                                                                                    </h4>

                                                                                    <h4 class=" text-dark"></h4>
                                </div>
                            </div>
                            <div class="row row-1"><br></br></div>
                            <div class="row shadow p-4">
                                <h3 class=" text-dark">
                                    <span style="color:red">* </span>DDL,DML
                                </h3>
                                <h4 class=" text-dark">✓- Table 8 ,View 1</h4>
                                <h4 class=" text-dark">- INSERT ,UPDATE ,DELETE ,SELECT Query</h4>
                                <h4 class=" text-dark">*- CREATE VIEW</h4>
                                <span
                                    style="color:red">------------------------------------------------------------------------------------------------</span>
                                <h4 class=" text-dark">*CONCAT() ,IFNULL() ,AVG() , GROUP_CONCAT() ,ROUND()</h4>
                                <h4 class=" text-dark">ROW_NUMBER() OVER</h4>
                                <h4 class=" text-dark">✓ INNER JOIN ,LEFT OUTER JOIN </h4>
                                <h4 class=" text-dark">GROUP BY , ORDER BY ,ASC</h4>
                                <h4 class=" text-dark">*ON DUPLICATE KEY</h4>
                                <h4 class=" text-dark">(Sub query)</h4>
                                <h4 class=" text-dark">BETWEEN ,LIKE</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white border rounded p-4 shadow mt-1">
                <div class="container">
                    <div class="row">
                        <h1 class="text-dark text-center mb-1">Table</h1>
                        <img src="png/table.png">
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <!--ข้อความหลัง -->

            <div class="my-4 text-muted text-center">
                <p><img src="png/db.png" alt="" width="19" height="18" class="d-inline-block align-text-top">
                    PROJECT
                    DATA BASE / TIME NOW :
                    <!--clock-->
                    <h5.5 id="currentTime"></h5.5>
                </p>
            </div>
        </div>
        </div>

</html>