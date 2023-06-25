<?php
require_once ("connect.php");
if(isset($_POST['search'])) {

    // Lấy từ khóa tìm kiếm từ biểu mẫu
    $keyword = $_POST['keyword'];

    // Xây dựng truy vấn SQL để tìm kiếm sản phẩm
    $sql = "SELECT * FROM product WHERE name LIKE '%$keyword%'";

    // Thực thi truy vấn SQL
    $result = mysqli_query($conn, $sql);

   
    // Kiểm tra xem có dòng dữ liệu trả về hay không
    if(mysqli_num_rows($result) > 0) {

        // Lặp qua từng sản phẩm được tìm thấy và hiển thị thông tin sản phẩm
        while($row = mysqli_fetch_assoc($result)) {
            echo "Sản phẩm: " . $row['name'] . "<br>";
            echo "Mô tả: " . $row['description'] . "<br>";
            echo "Giá: " . $row['price'] . "<br><br>";
        }

    } else {

        // Hiển thị thông báo không tìm thấy sản phẩm
        echo "Không tìm thấy sản phẩm nào với từ khóa '" . $keyword . "'";

    }

}
?>