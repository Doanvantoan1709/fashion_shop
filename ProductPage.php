<?php
session_start();
include 'db_conn.php'; // Kết nối MySQLi
ob_start();

// Khởi tạo giỏ hàng nếu chưa có
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Xử lý thêm sản phẩm vào giỏ hàng
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['qty'])) {
    $product_id = $_POST['id'];
    $quantity = intval($_POST['qty']); // Chuyển đổi sang số nguyên

    // Kiểm tra nếu sản phẩm đã tồn tại trong giỏ hàng
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $quantity; // Tăng số lượng
    } else {
        $_SESSION['cart'][$product_id] = $quantity; // Thêm sản phẩm mới
    }

    // Chuyển hướng về trang sản phẩm sau khi thêm
    header("Location: ProductPage.php");
    exit();
}

// Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC); // Lấy tất cả kết quả dưới dạng mảng kết hợp
} else {
    $products = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
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
    <link rel="stylesheet" href="./css/product.css"/>
</head>
<body>



	<!-- Start Slider Area -->
	<section id="slider_area" class="text-center">
		<div class="slider_active owl-carousel">
			<div class="single_slide"
				style="background-image: url(./image/slider/1.jpg); background-size: cover; background-position: center;">
				<div class="container">
					<div class="single-slide-item-table">
						<div class="single-slide-item-tablecell">
							<div class="slider_content text-left slider-animated-1">
								<p class="animated">New Year 2024</p>
								<h1 class="animated">best shopping</h1>
								<h4 class="animated">Big Sale of This Week 80% off</h4>
								<a href="#product_area" class="btn main_btn animated">shop now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="single_slide"
				style="background-image: url(./image/slider/2.jpg); background-size: cover; background-position: center ;">
				<div class="container">
					<div class="single-slide-item-table">
						<div class="single-slide-item-tablecell">
							<div class="slider_content text-center slider-animated-2">
								<p class="animated">Women fashion</p>
								<h1 class="animated">popular style</h1>
								<h4 class="animated">Big Sale of This Week 80% off</h4>
								<a href="#product_area" class="btn main_btn animated">shop now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="single_slide"
				style="background-image: url(./image/slider/3.jpg); background-size: cover; background-position: center ;">
				<div class="container">
					<div class="single-slide-item-table">
						<div class="single-slide-item-tablecell">
							<div class="slider_content text-right slider-animated-3">
								<p class="animated">Men Collection</p>
								<h1 class="animated">popular style</h1>
								<h4 class="animated">Big Sale of This Week 80% off</h4>
								<a href="#product_area" class="btn main_btn animated">shop now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Slider Area -->

	<!--  Promo ITEM STRAT  -->
	<section id="promo_area" class="section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<a href="#">
						<div class="single_promo">
							<img src="./image/promo/1.jpg" alt="">
							<div class="box-content">
								<h3 class="title">Men</h3>
								<span class="post">2024 Collection</span>
							</div>
						</div>
					</a>
				</div><!--  End Col -->

				<div class="col-lg-4 col-md-6 col-sm-12">
					<a href="#">
						<div class="single_promo">
							<img src="./image/promo/2.jpg" alt="">
							<div class="box-content">
								<h3 class="title">Shoe</h3>
								<span class="post">2024 Collection</span>
							</div>
						</div>
					</a>

					<a href="#">
						<div class="single_promo">
							<img src="./image/promo/4.jpg" alt="">
							<div class="box-content">
								<h3 class="title">Watch</h3>
								<span class="post">2024 Collection</span>
							</div>
						</div>
					</a>

				</div><!--  End Col -->

				<div class="col-lg-4 col-md-6 col-sm-12">
					<a href="#">
						<div class="single_promo">
							<img src="./image/promo/3.jpg" alt="">
							<div class="box-content">
								<h3 class="title">Women</h3>
								<span class="post">2024 Collection</span>
							</div>
						</div>
					</a>
				</div><!--  End Col -->

			</div>
		</div>
	</section>
	<!--  Promo ITEM END -->


	<!-- Start product Area -->
	<section id="product_area" class="section_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section_title">
						<h2>Our <span>Products</span></h2>
						<div class="divider"></div>
					</div>
				</div>
			</div>

			<div class="text-center">
				<div class="product_filter">
					<ul>
						<li class=" active filter" data-filter="all">ALL</li>
						<li class="filter" data-filter=".sale">Sale</li>
						<li class="filter" data-filter=".bslr">Bestseller</li>
						<li class="filter" data-filter=".ftrd">Featured</li>
					</ul>
				</div>
                    <div class="product_item">
                    <div class="container">
                        <div class="product-list">
                            <?php if (!empty($products)): ?>
                            <?php foreach ($products as $product): ?>
                            <div class="product">
                            <!-- Hiển ảnh hoặc ảnh lỗi sẽ cung cấp tên -->
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['NAME']; ?>"> 
                            <h2><?php echo $product['NAME']; ?></h2>
                            <p>Price: <?php echo number_format($product['price']); ?> VND</p>

                            <!-- Form thêm sản phẩm vào giỏ hàng -->
                            <form action="ProductPage.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                                <label for="quantity">Quantity:</label>
                                <input type="number" id="quantity" name="qty" value="1" min="1">
                                <button type="submit">Add to cart now</button>
                            </form>
                        </div>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <p>Không có sản phẩm nào.</p>
                        <?php endif; ?>
                    </div>
                </div>

                </div>
			</div>
		</div>
	</section>
	<!-- End product Area -->



</body>
</html>

<?php
$content = ob_get_clean();
include 'Layout.php';
?>  