<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.png" />
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
	href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="">
<?php 
session_start();
if ($_SESSION['logged_in']) {
	$idsess = $_SESSION['id'];
	$d =xd;
}
?>
	<?php include 'header.php';?>

	<!-- Slide1 -->
	<section class="slide1" >
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1"
					style="background-image: url(IMG/ricky-boring.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">

						<div class="wrap-btn-slide1 w-size1 animated visible-false zoomIn visible-true" data-appear="zoomIn">
							<!-- Button -->
							<a style="margin-top:400px;background-color:#49eabe;" href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4" tabindex="0">
								COMPRAR </a>
						</div>
					</div>
				</div>

				

			</div>
		</div>
	</section>

	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  
						<h4 class="m-text14 p-b-7">Categorias</h4>

						<ul class="p-b-54">
							<li class="p-t-4"><a  class="s-text13 active1"> All </a>
							</li>

							<li class="p-t-4"><a  class="s-text13">Influencers </a></li>
						</ul>

						  


						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text"
								name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
						-->
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
<!-- 						<div class="flex-w"> -->
<!-- 							<div -->
<!-- 								class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10"> -->
<!-- 								<select class="selection-2" name="sorting"> -->
<!-- 									<option>Default Sorting</option> -->
<!-- 									<option>Popularity</option> -->-->
<!-- 									<option>Price: low to high</option> -->
<!-- 									<option>Price: high to low</option> -->
<!-- 								</select> -->
<!-- 							</div> -->
<!-- 						</div> -->
					</div>

					<!-- Product -->
					<div class="row">
					<?php
    
    include 'db.php';
    
    $queryfirst = "SELECT * FROM `product` WHERE validate = 1";
	$resultfirst = $connection->query($queryfirst);
    if ($resultfirst->num_rows > 0) {
	
        // output data of each row
        while ($rowfirst = $resultfirst->fetch_assoc()) {
			
            $id_best = $rowfirst['id'];
            $name_best = $rowfirst['name'];
            $price_best = $rowfirst['price'];
            $thumbnail_best = $rowfirst['thumbnail'];
			$totalsold = $rowfirst['total'];
			$id_create = $rowfirst['id_usr'];
			$exp_date = "{$rowfirst['exp_date']}";
			
			
			
            
            ?>
			
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div
									class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="<?= $thumbnail_best; ?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a class="block2-btn-addwishlist hov-pointer trans-0-4"> <i
											class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none"
											aria-hidden="true"></i>
										</a>
										<form method="post" >
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
										<!--<a class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" href="product-detail.php?id" > Comprar</a> -->
											<button  type="submit" value="buy" name="buy"
												class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"> 
												Comprar</button> 
										</div>
									</div>
								</div>
								<div  class="row countdonw_container" style="margin-left: 38px;">
										<div class="row" >
											<span class="countdown_name"  data-countdown="<?=$exp_date?>"></span>
										</div >
										<div class="row" >
											<span>DIAS : HORAS : MIN : SEG </span>
										</div>
								</div>
								<p id=<?= $nomeid?>></p>

								<div class="block2-txt p-t-20" style="margin-left: 16px;">
									<a class="block2-name dis-block l-text1 p-b-5" style="font-size: 22px; color: #5f4949;">
										<?= $name_best; ?>
									</a> <span class="block2-price l-text1 p-r-5" style="font-size: 22px; color: #5f4949;">
										R$<?= $price_best; ?>
									</span>
									
					<div class="p-t-33 p-b-60">
						<div class="flex-m flex-w p-b-10">
							


							<div class=" dropdown-success  rs2-select2 rs3-select2 bo4 of-hidden w-size16">
								<select class="custom-select col" name="size">
									<option class="dropdown-item">Tamanho</option>
									<option class="dropdown-item" >P</option>
									<option class="dropdown-item" >M</option>
									<option class="dropdown-item">G</option>
									<option class="dropdown-item">GG</option>
								</select>
							</div>
						</div>

						<!-- 					<div class="flex-m flex-w"> -->
						<!-- 						<div class="s-text15 w-size15 t-center"> -->
						<!-- 							Color -->
						<!-- 						</div> -->

						<!-- 						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16"> -->
						<!-- 							<select class="selection-2" name="color"> -->
						<!-- 								<option>Choose an option</option> -->
						<!-- 								<option>Gray</option> -->
						<!-- 								<option>Red</option> -->
						<!-- 								<option>Black</option> -->
						<!-- 								<option>Blue</option> -->
						<!-- 							</select> -->
						<!-- 						</div> -->
						<!-- 
											</div> -->
						
						
						

						<div class="flex-r-m flex-w p-t-10">
							<div class="w-size16 flex-m flex-w">
								<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
									<input type="number" name="id_prod" value='<?= $id_best;?>' hidden /> 
									
									<input type="number" name="id_usr_create" value='<?= $id_create;?>' hidden />
									
									<input class="size8 m-text18 t-center num-product"
										type="number" name="quantity" value="1" hidden>
								</div>

								</form>
								
							<div
							
									class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
									<!-- Button -->
								</div>
							</div>
						</div>
					</div>
				
								</div>
							</div>
						</div>
					<input hidden type="text"    class ="mano" id="<?=$nomeid2?>"  value="<?=$exp_date ?>" >
					
						
					
 <?php 


}}if (isset($_POST['buy'])) {
			      
	if (! isset($_SESSION['logged_in'])) {
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/Smartshop/sign' />";
	}else if($_POST['size'] == "Tamanho"){
		
	}
	else {
		$quantity = $_POST['quantity'];
		$size =$_POST['size'];
		$usrc_id =$_POST['id_usr_create'];
		$id_pd = $_POST['id_prod'];
	  
		// inserting into command
		include 'db.php';
		
		$querybuy = "INSERT INTO command(id_produit, quantity,Tamanho, statut, id_user, id_usr_create)
VALUES ('$id_pd','$quantity','$size','ordered', '$idsess', '$usrc_id')";
		
		if ($connection->query($querybuy) === TRUE) {
			$_SESSION['item'] += 1;
			
			echo "<meta http-equiv='refresh' content='0;url=cart.php' />";
		} else {
			echo "<h5 class='text-red'>Error: " . $querybuy . "</h5><br><br><br>" . $connection->error;
		}
		$connection->close();
	}
}


?>

					
					</div>

					<!-- Pagination -->

				</div>
			</div>
		</div>
	</section>


	<!-- Blog -->
	template: '<div class="block4 wrap-pic-w"><img src="{{image}}" alt"IMG-INSTAGRAM> <a href="{{https://www.instagram.com/adaptspace/}}" class="block4-overlay sizefull ab-t-l trans-0-4"><span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25"></a></div> ' 

	<!-- Instagram -->
	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">@ Siga nosso Instagram</h3>
		</div>

		<div id="instafeed" class="flex-w">
			
			
		</div>
		
		
	</section>

	<!-- Shipping -->




	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top"> <i class="fa fa-angle-double-up"
			aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>


	<script type="text/javascript" src="js/instafeed.min.js"></script>
	<script type="text/javascript" src="js/ista.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript"
		src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript"
		src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript"
		src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript"
		src="vendor/lightbox2/js/lightbox.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript"
		src="vendor/sweetalert/sweetalert.min.js"></script>
		<script type="text/javascript"
		src="vendor/sweetalert/sweetalert.min.js"></script>
		<script type="text/javascript"
		src="src/js/jquery.countdown.js"></script>
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
				swal(nameProduct, "Adicionado a wishlist !", "success");
			});
		});
		$('[data-countdown]').each(function() {
		  var $this = $(this), finalDate = $(this).data('countdown');
		  $this.countdown(finalDate, function(event) {
		    $this.html(event.strftime('%D : %H : %M : %S'));
		  });
		});
	</script>

	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<?php include 'footer.php';?>

</body>
</html>
