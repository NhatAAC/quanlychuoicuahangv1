<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng</title>
</head>
<body>
    
    <header></header>
    <main>
        
            <form action="xuly.php" method="post" autocomplete="on">
                <label for="id_name">Mã Khách Hàng</label><br>
                <input type="number" id="id_name" name="user_id" placeholder="Mã khách hàng"><br>
                <label for="tg_order">Thời Gian Order</label><br>
                <input type="datetime-local" id="tg_order" name="create_order" placeholder="thời gian oder"><br>
            
                <label for="address">Địa chỉ</label><br>
                <textarea id="address" nane="address" placeholder="Địa chỉ"></textarea><br>
            
                <label for="status">Phương Thức</label><br>
                <select id="status" name="status">
                    <option value="shipper">shipper</option>
                    <option value="không shipper">Không shipper</option>
                </select><br>  

                <label for="bill">Tổng tiền</label><br>
                <input type="number" id="bill" name="bill_tien"><br>

                <label for="price_total">Mã Cửa Hàng</label><br>
                <input type="number" id="price_total" name="id_branch" placeholder="Mã Cửa Hàng"><br>
            
                <input type="submit" value="Đặt hàng">
            </form>
    </main>
</body>
</html>
