<?php 
require_once 'connect_product.php';

$id_store = $_POST['id_store'];
$id_product = $_POST['id_product'];
$amount_sold = $_POST['amount_sold'];
$price = $_POST['price'];
$Seller = $_POST['Seller'];

require_once 'connect_product.php';
$stmt =  $conn->prepare("DELETE FROM store_product_ WHERE amount <= 0");
$stmt->execute();

if(is_array($amount_sold)){
    $sale_date = date("Y-m-d H:i:s"); // คำนวณหาวันที่ขาย
    
    for($i=0;$i<count($id_store);$i++){

        
        if($amount_sold[$i] != 0 && $amount_sold[$i] != null){
            $TotalPrice = $amount_sold[$i] * $price[$i];
            $stmt = $conn->prepare("INSERT INTO sold_products (id_store, id_product, amount_sold, Price_Sold, sum_price, sale_date, Seller) 
            VALUES (:id_store, :id_product, :amount_sold, :Price_Sold, :sum_price, :sale_date, :Seller)
                                                            ");
            $stmt->bindParam(':id_store', $id_store[$i]);
            $stmt->bindParam(':id_product', $id_product[$i]);
            $stmt->bindParam(':amount_sold', $amount_sold[$i]);
            $stmt->bindParam(':Price_Sold', $price[$i]);
            $stmt->bindParam(':sum_price', $TotalPrice);
            $stmt->bindParam(':sale_date', $sale_date);
            $stmt->bindParam(':Seller', $Seller);
            $stmt->execute();
                
                
        }
    }

        for($j=0;$j<=count($id_store);$j++){

        // นำจำนวนที่ขาย ลบสินค้าที่อยู่คงคลัง
            $stmt = $conn->prepare("UPDATE store_product_ SET amount = (amount - :amount_sold) WHERE id_product = :id_product");
            $stmt->bindValue(':amount_sold', $amount_sold[$j]);
            $stmt->bindValue(':id_product', $id_product[$j]);
            $stmt->execute();
            
        }  



    
// กลับไปหน้าแสดงข้อมูล
if($stmt->execute()){

    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    echo '<script>
                setTimeout(function() {
                swal({
                title: "Successfully sold product",
                type: "success"
                }, function() {
                window.location = "main.php"; //หน้าที่ต้องการให้กระโดดไป
                });
                }, 100);
                </script>';

}
}
?>