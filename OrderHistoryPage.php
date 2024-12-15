<?php
session_start();
include 'db_conn.php'; // Kết nối MySQLi
ob_start();

// Truy vấn lịch sử mua hàng từ bảng order_items
$sql = "SELECT oi.order_id, p.name, oi.buy_qty, oi.price, oi.buy_qty * oi.price AS total_price
        FROM order_items oi 
        JOIN products p ON oi.product_id = p.id 
        ORDER BY oi.order_id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .con_history {  
            width: 100%;
            max-width: 850px;
            margin: 50px auto;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #4CAF50; /* Màu xanh lá cây cho tiêu đề */
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color:rgb(68, 205, 151); /* Màu xanh lá cây cho header */
            color: white; /* Màu chữ trắng cho header */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9; /* Màu nền cho các dòng chẵn */
        }

        tr:hover {
            background-color: #f1f1f1; /* Màu nền cho dòng khi hover */
        }

        td {
            color: #555; /* Màu chữ cho các ô dữ liệu */
        }
    </style>
</head>

<body>
    	<!-- Page item Area -->
        <div id="page_item_area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-left">
						<h3>History</h3>
					</div>		

					<div class="col-sm-6 text-right">
						<ul class="p_items">
							<li><a href="#">home</a></li>
							<li><span>History</span></li>
						</ul>					
					</div>	
				</div>
			</div>
		</div>

<div class="con_history">

    <table>
        <thead>
            <tr>
                <!-- <th>Order ID</th> -->
                <th>Product name</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Date buy</th>
                <!-- <th>Action</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <!-- <td><?php echo $row['order_id']; ?></td> -->
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['buy_qty']; ?></td>
                        <td><?php echo number_format($row['total_price'], 2); ?> VND</td>
                        <td><?php echo date('Y-m-d');?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='5'>No purchase history.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>

</html>

<?php
$content = ob_get_clean();
include 'Layout.php';
?>  