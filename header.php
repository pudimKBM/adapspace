<head>

<?php 
session_start();


?>
<!-- Global Site Tag (gtag.js) - Google Analytics -->


  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114440257-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114440257-1');
</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="IMG/favicon.png" />
    <title>Adapt Space</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a  href="index.php"><img style="width:130px;" src="images/logo-adaptspace.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSite">

            <ul class="navbar-nav flex-fill justify-content-center  m-2">
                <li class="nav-item pr-5">
                    <a class="nav-link  pl-5 pr-5" href="index.php">HOME</a>
                </li>
                <li class="nav-item pl-5 pr-5">
                    <a class="nav-link" href="shop.php">SHOP</a>
                </li>
                <li class="nav-item  pl-5 pr-5">
                    <a class="nav-link" href="http://www.adapt-influencers.esy.es">INFLUENCERS</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-4">
                    <a class="nav-link" href="cart.php">
                        <span style="font-size: 1.1em;">
                        <i class="fas fa-shopping-cart "></i>
                        </span>
                    </a>
                </li>
                <li class="nav-item mr-4">
                    <span style="font-size: 1.1em;">
                    <?php if (isset($_SESSION['id'])){ ?>
                        <a class="nav-link" href="CoolAdmin-master/index.php"><i class="far fa-user"></i></a>
                    <?php }else{  ?>
                        <a class="nav-link" href="login.php"><i class="far fa-user"></i></a>
                    <?php }?>
                        </span>
                </li>
            </ul>
        </div>
    </nav>