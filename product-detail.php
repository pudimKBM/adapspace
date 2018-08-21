<!DOCTYPE html>
<?php
session_start();

if (! isset($_GET['id'])) {
    header('Location: index');
}

if (isset($_SESSION['logged_in'])) {
    $idsess = $_SESSION['id'];
}
$id_product = $_GET['id'];
include 'db.php';

// get products
$queryproduct = "SELECT id, name, price, description, id_picture, thumbnail, id_usr
              FROM product WHERE id = '{$id_product}'";
$result1 = $connection->query($queryproduct);

if ($result1->num_rows > 0) {
    // output data of each row
    while ($rowproduct = $result1->fetch_assoc()) {
        $id_usr = $rowproduct['id_usr'];
        $id_productdb = $rowproduct['id'];
        $name_product = $rowproduct['name'];
        $price_product = $rowproduct['price'];
        $id_pic = $rowproduct['id_picture'];
        $description = $rowproduct['description'];
        $thumbnail_product = $rowproduct['thumbnail'];
    }
}

?>
<html lang="en">
<head>
<title><?= $name_product ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
 
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="vendor/n/css/n.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>



<body class="">

	<!-- Header -->
	<?php include('header.php'); ?>

	<!-- breadcrumb -->

?>
	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>
					<div class="slick3">
					<?php
    
    // get categories
    $querypic = "SELECT * FROM `product` WHERE id_picture= '{$id_pic}' ";
    $total = $connection->query($querypic);
    if ($total->num_rows > 0) {
        // output data of each row
        while ($rowpic = $total->fetch_assoc()) {
            $pics = $rowpic['thumbnail'];
            ?>
					
						<div class="item-slick3" data-thumb="<?= $pics; ?>">
							<div class="wrap-pic-w">
								<img src="<?= $pics; ?>" alt="IMG-PRODUCT">
							</div>
						</div>
<?php }}?>
											</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?= $name_product; ?>
					
				</h4>

				<span class="m-text17">
					R$<?= $price_product;?>
				</span>

				<p class="s-text8 p-t-10">
					<?= $description; ?>
				</p>

				<!--  -->
				
			  <?php

		
			  
			  
			  
			  ?>
			  
<!-- 				<div class="p-b-45"> -->
				<!-- 					<span class="s-text8 m-r-35">SKU: MUG-01</span> -->
				<!-- 					<span class="s-text8">Categories: Mug, Design</span> -->
				<!-- 				</div> -->

				<!--  -->
				

				<!-- 				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14"> -->
				<!-- 					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4"> -->
				<!-- 						Reviews (0) -->
				<!-- 						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i> -->
				<!-- 						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i> -->
				<!-- 					</h5> -->

				<!-- 					<div class="dropdown-content dis-none p-t-15 p-b-23"> -->
				<!-- 						<p class="s-text8"> -->
				<!-- 							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat -->
				<!-- 						</p> -->
				<!-- 					</div> -->
				<!-- 				</div> -->
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<!-- 	<section class="relateproduct bgwhite p-t-45 p-b-138"> -->
	<!-- 		<div class="container"> -->
	<!-- 			<div class="sec-title p-b-60"> -->
	<!-- 				<h3 class="m-text5 t-center"> -->
	<!-- 					Related Products -->
	<!-- 				</h3> -->
	<!-- 			</div> -->

	<!-- Slide2 -->
	<!-- 			<div class="wrap-slick2"> -->
	<!-- 				<div class="slick2"> -->

	<!-- 					<div class="item-slick2 p-l-15 p-r-15"> -->
	<!-- Block2 -->
	<!-- 						<div class="block2"> -->
	<!-- 							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew"> -->
	<!-- 								<img src="images/item-02.jpg" alt="IMG-PRODUCT"> -->

	<!-- 								<div class="block2-overlay trans-0-4"> -->
	<!-- 									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4"> -->
	<!-- 										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i> -->
	<!-- 										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> -->
	<!-- 									</a> -->

	<!-- 									<div class="block2-btn-addcart w-size1 trans-0-4"> -->
	<!-- Button -->
	<!-- 										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"> -->
	<!-- 											Add to Cart -->
	<!-- 										</button> -->
	<!-- 									</div> -->
	<!-- 								</div> -->
	<!-- 							</div> -->

	<!-- 							<div class="block2-txt p-t-20"> -->
	<!-- 								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5"> -->
	<!-- 									Herschel supply co 25l -->
	<!-- 								</a> -->

	<!-- 								<span class="block2-price m-text6 p-r-5"> -->
	<!-- 									$75.00 -->
	<!-- 								</span> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 					</div> -->

	<!-- 					<div class="item-slick2 p-l-15 p-r-15"> -->
	<!-- Block2 -->
	<!-- 						<div class="block2"> -->
	<!-- 							<div class="block2-img wrap-pic-w of-hidden pos-relative"> -->
	<!-- 								<img src="images/item-03.jpg" alt="IMG-PRODUCT"> -->

	<!-- 								<div class="block2-overlay trans-0-4"> -->
	<!-- 									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4"> -->
	<!-- 										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i> -->
	<!-- 										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> -->
	<!-- 									</a> -->

	<!-- 									<div class="block2-btn-addcart w-size1 trans-0-4"> -->
	<!-- Button -->
	<!-- 										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"> -->
	<!-- 											Add to Cart -->
	<!-- 										</button> -->
	<!-- 									</div> -->
	<!-- 								</div> -->
	<!-- 							</div> -->

	<!-- 							<div class="block2-txt p-t-20"> -->
	<!-- 								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5"> -->
	<!-- 									Denim jacket blue -->
	<!-- 								</a> -->

	<!-- 								<span class="block2-price m-text6 p-r-5"> -->
	<!-- 									$92.50 -->
	<!-- 								</span> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 					</div> -->

	<!-- 					<div class="item-slick2 p-l-15 p-r-15"> -->
	<!-- Block2 -->
	<!-- 						<div class="block2"> -->
	<!-- 							<div class="block2-img wrap-pic-w of-hidden pos-relative"> -->
	<!-- 								<img src="images/item-05.jpg" alt="IMG-PRODUCT"> -->

	<!-- 								<div class="block2-overlay trans-0-4"> -->
	<!-- 									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4"> -->
	<!-- 										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i> -->
	<!-- 										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> -->
	<!-- 									</a> -->

	<!-- 									<div class="block2-btn-addcart w-size1 trans-0-4"> -->
	<!-- Button -->
	<!-- 										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"> -->
	<!-- 											Add to Cart -->
	<!-- 										</button> -->
	<!-- 									</div> -->
	<!-- 								</div> -->
	<!-- 							</div> -->

	<!-- 							<div class="block2-txt p-t-20"> -->
	<!-- 								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5"> -->
	<!-- 									Coach slim easton black -->
	<!-- 								</a> -->

	<!-- 								<span class="block2-price m-text6 p-r-5"> -->
	<!-- 									$165.90 -->
	<!-- 								</span> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 					</div> -->

	<!-- 					<div class="item-slick2 p-l-15 p-r-15"> -->
	<!-- Block2 -->
	<!-- 						<div class="block2"> -->
	<!-- 							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale"> -->
	<!-- 								<img src="images/item-07.jpg" alt="IMG-PRODUCT"> -->

	<!-- 								<div class="block2-overlay trans-0-4"> -->
	<!-- 									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4"> -->
	<!-- 										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i> -->
	<!-- 										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> -->
	<!-- 									</a> -->

	<!-- 									<div class="block2-btn-addcart w-size1 trans-0-4"> -->
	<!-- Button -->
	<!-- 										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"> -->
	<!-- 											Add to Cart -->
	<!-- 										</button> -->
	<!-- 									</div> -->
	<!-- 								</div> -->
	<!-- 							</div> -->

	<!-- 							<div class="block2-txt p-t-20"> -->
	<!-- 								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5"> -->
	<!-- 									Frayed denim shorts -->
	<!-- 								</a> -->

	<!-- 								<span class="block2-oldprice m-text7 p-r-5"> -->
	<!-- 									$29.50 -->
	<!-- 								</span> -->

	<!-- 								<span class="block2-newprice m-text8 p-r-5"> -->
	<!-- 									$15.90 -->
	<!-- 								</span> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 					</div> -->

	<!-- 					<div class="item-slick2 p-l-15 p-r-15"> -->
	<!-- Block2 -->
	<!-- 						<div class="block2"> -->
	<!-- 							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew"> -->
	<!-- 								<img src="images/item-02.jpg" alt="IMG-PRODUCT"> -->

	<!-- 								<div class="block2-overlay trans-0-4"> -->
	<!-- 									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4"> -->
	<!-- 										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i> -->
	<!-- 										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> -->
	<!-- 									</a> -->

	<!-- 									<div class="block2-btn-addcart w-size1 trans-0-4"> -->
	<!-- Button -->
	<!-- 										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"> -->
	<!-- 											Add to Cart -->
	<!-- 										</button> -->
	<!-- 									</div> -->
	<!-- 								</div> -->
	<!-- 							</div> -->

	<!-- 							<div class="block2-txt p-t-20"> -->
	<!-- 								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5"> -->
	<!-- 									Herschel supply co 25l -->
	<!-- 								</a> -->

	<!-- 								<span class="block2-price m-text6 p-r-5"> -->
	<!-- 									$75.00 -->
	<!-- 								</span> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 					</div> -->

	<!-- 					<div class="item-slick2 p-l-15 p-r-15"> -->
	<!-- Block2 -->
	<!-- 						<div class="block2"> -->
	<!-- 							<div class="block2-img wrap-pic-w of-hidden pos-relative"> -->
	<!-- 								<img src="images/item-03.jpg" alt="IMG-PRODUCT"> -->

	<!-- 								<div class="block2-overlay trans-0-4"> -->
	<!-- 									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4"> -->
	<!-- 										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i> -->
	<!-- 										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> -->
	<!-- 									</a> -->

	<!-- 									<div class="block2-btn-addcart w-size1 trans-0-4"> -->
	<!-- Button -->
	<!-- 										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"> -->
	<!-- 											Add to Cart -->
	<!-- 										</button> -->
	<!-- 									</div> -->
	<!-- 								</div> -->
	<!-- 							</div> -->

	<!-- 							<div class="block2-txt p-t-20"> -->
	<!-- 								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5"> -->
	<!-- 									Denim jacket blue -->
	<!-- 								</a> -->

	<!-- 								<span class="block2-price m-text6 p-r-5"> -->
	<!-- 									$92.50 -->
	<!-- 								</span> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 					</div> -->

	<!-- 					<div class="item-slick2 p-l-15 p-r-15"> -->
	<!-- Block2 -->
	<!-- 						<div class="block2"> -->
	<!-- 							<div class="block2-img wrap-pic-w of-hidden pos-relative"> -->
	<!-- 								<img src="images/item-05.jpg" alt="IMG-PRODUCT"> -->

	<!-- 								<div class="block2-overlay trans-0-4"> -->
	<!-- 									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4"> -->
	<!-- 										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i> -->
	<!-- 										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> -->
	<!-- 									</a> -->

	<!-- 									<div class="block2-btn-addcart w-size1 trans-0-4"> -->
	<!-- Button -->
	<!-- 										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"> -->
	<!-- 											Add to Cart -->
	<!-- 										</button> -->
	<!-- 									</div> -->
	<!-- 								</div> -->
	<!-- 							</div> -->

	<!-- 							<div class="block2-txt p-t-20"> -->
	<!-- 								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5"> -->
	<!-- 									Coach slim easton black -->
	<!-- 								</a> -->

	<!-- 								<span class="block2-price m-text6 p-r-5"> -->
	<!-- 									$165.90 -->
	<!-- 								</span> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 					</div> -->

	<!-- 					<div class="item-slick2 p-l-15 p-r-15"> -->
	<!-- Block2 -->
	<!-- 						<div class="block2"> -->
	<!-- 							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale"> -->
	<!-- 								<img src="images/item-07.jpg" alt="IMG-PRODUCT"> -->

	<!-- 								<div class="block2-overlay trans-0-4"> -->
	<!-- 									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4"> -->
	<!-- 										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i> -->
	<!-- 										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> -->
	<!-- 									</a> -->

	<!-- 									<div class="block2-btn-addcart w-size1 trans-0-4"> -->
	<!-- Button -->
	<!-- 										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"> -->
	<!-- 											Add to Cart -->
	<!-- 										</button> -->
	<!-- 									</div> -->
	<!-- 								</div> -->
	<!-- 							</div> -->

	<!-- 							<div class="block2-txt p-t-20"> -->
	<!-- 								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5"> -->
	<!-- 									Frayed denim shorts -->
	<!-- 								</a> -->

	<!-- 								<span class="block2-oldprice m-text7 p-r-5"> -->
	<!-- 									$29.50 -->
	<!-- 								</span> -->

	<!-- 								<span class="block2-newprice m-text8 p-r-5"> -->
	<!-- 									$15.90 -->
	<!-- 								</span> -->
	<!-- 							</div> -->
	<!-- 						</div> -->
	<!-- 					</div> -->
	<!-- 				</div> -->
	<!-- 			</div> -->

	<!-- 		</div> -->
	<!-- 	</section> -->


	<!-- Footer -->
	<?php include 'footer.php'?>


	<!-- Back to top -->
	
	<script type="text/javascript">

		
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});

		$('.btn-addcart-product-detail').each(function(){
			var nameProduct = $('.product-detail-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
