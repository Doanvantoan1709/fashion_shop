<?php
session_start();
include 'db_conn.php'; // Kết nối MySQLi
ob_start();

// Khởi tạo giỏ hàng nếu chưa có
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Xử lý xóa sản phẩm khỏi giỏ hàng
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    unset($_SESSION['cart'][$product_id]);
}

// Xử lý thanh toán
if (isset($_POST['checkout'])) {
    // Tạo một order_id ngẫu nhiên (hoặc bạn có thể tạo một hệ thống quản lý order_id riêng)
    $order_id = uniqid(); // Hoặc sử dụng ID tự động tăng nếu có

    // Lưu thông tin đơn hàng vào cơ sở dữ liệu
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $sql = "SELECT price FROM products WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        
        if ($product) {
            $total_price = $product['price'] * $quantity;
            $insert_order = "INSERT INTO order_items (order_id, product_id, buy_qty, price) VALUES (?, ?, ?, ?)";
            $order_stmt = $conn->prepare($insert_order);
            $order_stmt->bind_param("iiid", $order_id, $product_id, $quantity, $total_price);
            $order_stmt->execute();
        }
    }

    // Sau khi lưu, xóa giỏ hàng
    unset($_SESSION['cart']);
    header("Location: SuccessPage.php"); // Chuyển hướng đến trang thành công
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
	<link rel="stylesheet" href="./css/animate.css" />
	<link rel="stylesheet" href="./css/owl.theme.default.min.css" />
	<link rel="stylesheet" href="./css/owl.carousel.min.css" />
	<link rel="stylesheet" href="./css/meanmenu.min.css" />
	<link rel="stylesheet" href="./css/venobox.css" />
	<link rel="stylesheet" href="./css/font-awesome.css" />
	<link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/cart.css">
</head>
<body>

<div class="contai_cart">
 

    <table>
        <thead>
            <tr>
                <th>Product name</th>
                <th>Price</th>
                <th>Quatity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalPrice = 0;
            if (!empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $product_id => $quantity) {
                    // Truy vấn thông tin sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM products WHERE id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $product_id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $product = $result->fetch_assoc();
                    
                    if ($product) {
                        $total = $product['price'] * $quantity;
                        $totalPrice += $total;
                        ?>
                        <tr>
                            <td><?php echo $product['NAME']; ?></td>
                            <td><?php echo number_format($product['price']); ?> VND</td>
                            <td><?php echo $quantity; ?></td>
                            <td><?php echo number_format($total); ?> VND</td>
                            <td><a style=" text-decoration: none; color: red" href="CartPage.php?remove=<?php echo $product_id; ?>">Delete</a></td>
                        </tr>
                        <?php
                    }
                }
            } else {
                echo "<tr><td colspan='5'>Cart is empty.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <div class="total-price">
        <h3>Total: <?php echo number_format($totalPrice); ?> VND</h3>
    </div>

        <form action="CartPage.php" method="POST">
            <button type="submit" name="checkout">Checkout</button>
        </form>

</div>

</body>
</html>



<?php
$content = ob_get_clean();
include 'Layout.php';
?>  