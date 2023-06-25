<?php
require_once ("connect.php") ;
 $Tendangnhap = $_POST["Email"];
 $Pass = $_POST["pass"];
 $sql = "SELECT * FROM khach_hang WHERE email = '$Tendangnhap' AND password = '$Pass' " ;
 if($_GET["Matkhau=$Pass=F"])
 $result = $conn -> query($sql);
 $row = $result->fetch_assoc(); 
 if(mysqli_num_rows($result) > 0) {
 $_SESSION["gioHang"]= [];
            $_SESSION["user"] = [];
            $_SESSION["user"]["name"] = $row["Ten_kh"];
            header('Location: index.php' );
else {

    // Hiển thị thông báo lỗi nếu thông tin đăng nhập không chính xác
     echo "Thông tin đăng nhập không chính xác.";
        
        }
        
    }      
?>