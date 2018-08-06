<!DOCTYPE html>
<html lang="en">
<head>
<title>Product Detail</title>
<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="au theme template">
<meta name="author" content="Hau Nguyen">
<meta name="keywords" content="au theme template">

<!-- Title Page-->
<title>Forms</title>

<!-- Fontfaces CSS-->
<link href="css/font-face.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-5/css/fontawesome-all.min.css"
	rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css"
	rel="stylesheet" media="all">
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css"
	rel="stylesheet" media="all">

<!-- Bootstrap CSS-->
<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet"
	media="all">

<!-- Vendor CSS-->
<!--<link href="vendor/animsition/animsition.min.css" rel="stylesheet"
	media="all"> -->
<link
	href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
	rel="stylesheet" media="all">
<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet"
	media="all">
<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/perfect-scrollbar/perfect-scrollbar.css"
	rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="css/theme.css" rel="stylesheet" media="all">
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
<?php
session_start();

if (isset($_SESSION['logged_in'])) {
    $idsess = $_SESSION['id'];
}
$id_product = $_GET['id'];
?>

<?php include('header.php'); ?>
<style>
.st {margin-left: 47%;},
@media ( max-width : 300px){ 
   .st{ margin-left: 40%;}
}

</style>
<body>
<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
                        <div class="col-md-6" >
							
							<div class="col-lg">
								<div class="card">
									<div class="card-header">
										<strong class="st" >Checkout</strong>
                                    </div>
                                    <div class="row" > 
                                    <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" onsubmit="PagSeguroLightbox(this); return false;" method="post">
									        <div class="card-body card-block">
                                            
									        	<div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md">
                                                            <label for="company" class=" form-control-label">Nome</label>
                                                            <input type="text" id="nome"
                                                                placeholder="Digite seu nome" class="form-control" rquired>
                                                        </div>
                                                        <div class="col-md">
                                                                <label for="company" class=" form-control-label">Sobrenome</label>
                                                            <input type="text" id="nome2"
                                                               placeholder="Digite seu sobrenome" class="form-control" rquired>
                                                        </div>
                                                        <div class="col-sm-2">
                                                        <div class="form-group">
                                                            
                                                            <label for="vat" class=" form-control-label"></label>Data de nascimento <input
                                                                type="date" id="datanas" 
                                                                class="form-control"rquired>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            
                                                            <label for="vat" class=" form-control-label"></label>Sexo <input
                                                                type="text" id="sex" placeholder="M"
                                                                class="form-control"rquired>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="street" class=" form-control-label">Rua</label>
                                                            <input type="text" id="rua"
                                                                placeholder="Rua Domingos de morais" class="form-control"rquired>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="row form-group">
                                                            <div class="col-8">
                                                                <div class="form-group">
                                                                    <label for="city" class=" form-control-label">Cidade</label>
                                                                    <input type="text" id="cidade" placeholder="Sao Paulo"
                                                                        class="form-control"rquired>
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="country" class=" form-control-label">Estado</label>
                                                            <input type="text" id="estado" placeholder="Sao Paulo"
                                                                class="form-control"rquired>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="country" class=" form-control-label">País</label>
                                                            <input type="text" id="pais" placeholder="Brasil"
                                                                class="form-control"rquired>
                                                        </div>
                                                    </div>
                                                    
                                                </div> 
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="postal-code" class=" form-control-label"> CEP </label> <input type="number" id="cep"
                                                                placeholder="Postal Code" class="form-control"rquired>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="postal-code" class=" form-control-label"> Numero </label> <input type="number" id="numeroC"
                                                                placeholder="Postal Code" class="form-control"rquired>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="postal-code" class=" form-control-label"> Bairro </label> <input type="text" id="bairro"
                                                                placeholder="Postal Code" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label  class=" form-control-label"> Complemento </label> <input type="text" id="complemento"
                                                                placeholder="Complemento" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="tel" class=" form-control-label"> Telefone </label> <input type="tel" id="telefone"
                                                                placeholder="(11)xxxx-xxxx" class="form-control"rquired>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="tel" class=" form-control-label"> Celular </label> <input type="tel" id="celular"
                                                                placeholder="(11)xxxx-xxxx" class="form-control"rquired>
                                                        </div>
                                                    </div>
                                                </div>        
                                            </div>
                                            <input type="submit" name="submit" class="btn" >
                                            
                                </form>
                                </div>
                                </div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

	</div>
    


<?php include('footer.php'); ?> 
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top"> <i class="fa fa-angle-double-up"
			aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript"
		src="vendor/n/js/n.min.js"></script>
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

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript"
		src="vendor/sweetalert/sweetalert.min.js"></script>
        <script src="js/main.js"></script>
        </body>
  
        </html>