<?php
include 'condb.php';
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

$sql = "SELECT ProductID, SUM(Quantity) as total_Quantity, SUM(TotalPrice) as total_Price
FROM rawmaterialorder
GROUP BY ProductID 
ORDER BY total_Quantity DESC
limit 3";

$result = $conn->query($sql);

$labels = [];
$data = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $labels[] = $row["ProductID"];
    $data[] = $row["total_Quantity"];

  }
}


include 'condb_store.php';

$sql = "SELECT r.ProductID,t.type_name,sum(r.Quantity) AS Quantity
        FROM rawmaterialorder AS r
        INNER JOIN product_details AS p
        ON r.ProductID = p.id_product
        INNER JOIN type_code AS t
        ON p.type_code = t.Type_code
        GROUP BY r.ProductID
        ORDER BY Quantity DESC";

$result = $conn->query($sql);

$Quantity = [];
$Quantity = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $type[] = $row["type_name"];
    $Quantity[] = $row["Quantity"];
  }
}


include 'condb_store.php';
$sql = "SELECT CONCAT(sp.id_store,' : ',s.name_store) AS store,sum(sp.amount_sold) AS amount_sold 
FROM sold_products AS sp
INNER JOIN store AS s
ON sp.id_store = s.id_store
GROUP BY sp.id_store";

$result = $conn->query($sql);

$store = [];
$amount_sold = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $store[] = $row["store"];
    $amount_sold[] = $row["amount_sold"];

  }
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
    <title>Import Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500&amp;subset=latin-ext" rel="stylesheet">
    <link rel="shortcut icon" href="png/icon.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

</head>

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

        <div class="container mt-4 text-center">
            <div class="row">
                    <h1 class=" text-dark text-canter mb-4">
                    Import Product

                    </h1>
                <div class="col col-4">
                    <div class="bg-white border rounded p-4 shadow-sm">
                        <h3>Top 3 Best Import</h3>
                        <div>
                            <canvas id="topProductChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="bg-white border rounded p-4 shadow-sm">
                        <h3>Statistics of types  imported</h3>
                        <div>
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="bg-white border rounded p-4 shadow-sm">
                        <h3></h3>
                        <div>
                            <canvas id=""></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container-fluid mt-3 ">
            <div class="row">
                <div class="col ">
                    <div class="bg-white border rounded p-4 shadow-sm ">
                        <div class="container">
                            <div class="row">
                                <div class="col col-5 ">
                                    <input class="form-control shadow mb-3" type="text" id="searchInput"
                                        onkeyup="searchFunction()" placeholder="Search for id store,product,date..">
                                </div>
                                <div class=" mb-1" id="row"></div>
                            </div>
                        </div>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                        
                            <table class="table caption-top table-striped text-center">
                                <thead class="table-dark text-center">
                                    <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Supplier Name</th>
                                        <th scope="col">Product ID</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col">Order Date</th>
                                        <th scope="col">Ordered By</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    <?php 
  require_once 'connect_product.php';
  $stmt = $conn->prepare("SELECT * FROM rawmaterialorder as r 
                            inner join supplier as s on r.SupplierID = s.SupplierID
                            inner join tbl_member as t on t.id = r.Ordered_by_id order by OrderID desc");
  $stmt->execute();
  $result = $stmt->fetchAll();
  foreach ($result as $row){
?>
                                    <tr>
                                        <td><?php echo $row['OrderID']; ?></td>
                                        <td><?php echo $row['SupplierName']; ?></td>
                                        <td><?php echo $row['ProductID']; ?></td>
                                        <td><?php echo $row['Quantity']; ?></td>
                                        <td><?php echo $row['UnitPrice']; ?> ฿</td>
                                        <td><?php echo $row['TotalPrice']; ?> ฿</td>
                                        <td><?php echo $row['OrderDate']; ?></td>
                                        <td><?php echo $row['Position']; ?> : <?php echo $row['name']; ?></td>
                                    </tr>
                                    <?php
      }
    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>

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

</html>

<script>
// Data for top selling product chart
var topProductData = {
    labels: <?php echo json_encode($labels); ?>,
    datasets: [{
        data: <?php echo json_encode($data); ?>,
        backgroundColor: ['#3C91E6', '#FFD06E', '#F97A7A']
    }],

};


// Data for inventory management chart
var inventoryData = {
    labels: <?php echo json_encode($type); ?>,
    datasets: [{
        data: <?php echo json_encode($Quantity); ?>,
        backgroundColor: ['#1b998b', '#e84855']
    }]
};

// Create chart for top selling product
var topProductCtx = document.getElementById('topProductChart').getContext('2d');
var topProductChart = new Chart(topProductCtx, {
    type: 'pie',
    data: topProductData,
    options: {
        responsive: true
    }
});

// Create chart for inventory management



var topProductData = {
    labels: <?php echo json_encode($type); ?>,
    datasets: [{
        label: `Products for sale`,
        data: <?php echo json_encode($Quantity); ?>,
        backgroundColor: ['#FF6B6B', '#FFE66D', '#A8D0E6', '#7DCEA0', '#F5D0C5', '#9D8189', '#E5D7BD', '#C4C4C4', '#5C5C5C', '#E6E6E6']
    }]
};

var topProductCtx = document.getElementById('salesChart').getContext('2d');
var salesChart = new Chart(topProductCtx, {
    type: 'horizontalBar',
    data: topProductData,
    options: {
        responsive: true,
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<style>
html {
    font-size: 14px;
}

.container {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
}

.my-custom-scrollbar {
    position: relative;
    height: 250px;
    overflow: auto;
}

.table-wrapper-scroll-y {
    display: block;
}
</style> 

<script>
function searchFunction() {
    let input, filter, table, tr, td, i, txtValue, noResults, count = 0;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableBody");
    tr = table.getElementsByTagName("tr");
    noResults = true;

    // Remove existing "No Results Found" before searching
    let existingNoResults = table.querySelector("tr:last-child td:first-child");
    if (existingNoResults && existingNoResults.textContent === "No Results Found") {
        table.removeChild(existingNoResults.parentElement);
    }

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        let match = false;
        for (j = 0; j < td.length; j++) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                match = true;
                break;
            }
        }
        if (match) {
            tr[i].style.display = "";
            noResults = false;
            count++;
        } else {
            tr[i].style.display = "none";
        }
    }

    if (noResults) {
        let noResultsElem = document.createElement("tr");
        noResultsElem.innerHTML = "<td colspan='7'>No Results Found</td>";
        table.appendChild(noResultsElem);
    } else {
        document.getElementById("row").innerHTML = "Number of rows found: " + count;
    }
}
</script>