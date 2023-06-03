<?php
$servername = "3.25.254.124";
$username = "root";
$password = "";
$database = "quanlychuoicuahang"

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// Lấy thông tin khách hàng và đơn hàng từ form
$user_id = $_POST["user_id"];
$create_order = $_POST["create_order"];
$address = $_POST["address"];
$status = $_POST["status"];
$id_branch = $_POST["id_branch"]
$product_price = $_POST["gia_tien"]; 
$product_quantity = $_POST["sl"];
$price_total = $product_price * $product_quantity;


// Tạo mới đơn hàng trong CSDL
$sql = "INSERT INTO orders (user_id,create_order,address,status,price_total,id_branch) 
        VALUES ('$user_id', '$create_order', '$address', '$status', '$price_total', '$id_branch')";

if ($conn->query($sql) === TRUE) {
    echo "Đơn hàng đã được tạo thành công";
} else {
    echo "Lỗi khi tạo đơn hàng: " . $conn->error;
}

// Đóng kết nối CSDL
$conn->close();
?>