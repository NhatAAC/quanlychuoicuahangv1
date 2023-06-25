<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "quanlychuoicuahang";
$conn = new mysqli($servername, $username, $password,$database);

    $tk = $_POST["user"];
    $mk = $_POST["pass"];
    $email = $_POST["email"];
    $sdt = $_POST["sđt"];
    $diachi = $_POST["diachi"];
    $gioi_tinh = $_POST["gioitinh"];
    // Kiểm tra xem email đã được sử dụng chưa
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Email này đã được sử dụng. Vui lòng sử dụng email khác.";
    } 
    else 
    {
    $sql=" INSERT INTO account ( userName , password , email,phone, address ,gtinh) VALUES ('$tk' , '$mk ', '$email' , '$sdt' , '$diachi' , '$gioi_tinh')";
    if ($conn->query($sql) === TRUE) {
        echo "Đăng ký thành công!";
        header("Location: view/dangnhap.php");
      } else {
        echo "Lỗi: " . $conn->error;
      }
    }
?>