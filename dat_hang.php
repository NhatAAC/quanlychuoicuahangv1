<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header></header>
    <main>
        
            <form action="index.php" method="post" autocomplete="on">
                <label for="id_name">Mã Khách Hàng</label><br>
                <input type="number" id="id_name" name="user_id" placeholder="Mã khách hàng"><br>

                <label for="ma_sp">Mã sản phẩm</label><br>
                <input type="number" id="ma_sp"><br>

                <label for="gia_tien">Giá sản phẩm</label><br>
                <input type="number" id="gia_tien" name="gia_tien"><br>

                <label for="Sl">Số lượng sản phẩm </label><br>
                <input type="number" id="sl" name="sl"><br>

                <label for="tg_order">Thời Gian Order</label><br>
                <input type="datetime-local" id="tg_order" name="create_order" placeholder="thời gian oder"><br>
            
                <label for="address">Địa chỉ</label><br>
                <textarea id="address" nane="address" placeholder="Địa chỉ"></textarea><br>
            
                <label for="status">Phương Thức</label><br>
                <select id="status" name="status">
                    <option value="shipper">shipper</option>
                    <option value="không shipper">Không shipper</option>
                </select><br>  

                <label for="price_total">Mã Cửa Hàng</label><br>
                <input type="number" id="price_total" name="id_branch" placeholder="Mã Cửa Hàng"><br>
            
                <input type="submit" value="Đặt hàng">
            </form>
    </main>
</body>
</html>
