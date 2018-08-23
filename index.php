<!doctype html>
<html lang="pt-br">

<?php include 'header.php' ?>
<style>
    .img2{
  vertical-align: middle;
  border-style: none; 
  width : 100%;
}
.btn-outline-info{
    color: #fff;
    background-color: #0000007a;
    border-color: #fff;

    font-weight: bold ;

}
.btn-outline-info:hover {
    color: #17a2b8;
    background-color: transparent;
    background-image: none;
    border-color: #17a2b8;
}
.testimonials {
	padding-top: 7rem;
	padding-bottom: 7rem;
  }
  
  .testimonials .testimonial-item {
	max-width: 18rem;
  }
  
  .testimonials .testimonial-item img {
	max-width: 12rem;
	box-shadow: 0px 5px 5px 0px #adb5bd;
  }

  .features-icons {
	padding-top: 7rem;
	padding-bottom: 7rem;
  }
  
  .features-icons .features-icons-item {
	max-width: 20rem;
  }
  
  .features-icons .features-icons-item .features-icons-icon {
	height: 7rem;
  }
  
  .features-icons .features-icons-item .features-icons-icon i {
	font-size: 4.5rem;
  }
  
  .features-icons .features-icons-item:hover .features-icons-icon i {
	font-size: 5rem;
  }
</style>
    <div id="mama" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">  
            <li data-target="#demo" data-slide-to="0" class="active"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img2" src="IMG/banner-home-new.JPG">
                <div class="carousel-caption mb-5 d-none d-block d-md-block">
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#mama" data-slide="prev">
            <span style="font-size: 2.1em; color:black;" class="fas fa-chevron-left"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#mama" data-slide="next">
            <span style="font-size: 2.1em; color:white;" class="fas fa-chevron-right"></span>
            <span class="sr-only">Avançar</span>
        </a>
    </div>
     <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-success"></i>
              </div>
              <h3>100% Digital</h3>
              <p class="lead mb-0">Crie sua camiseta em alguns cliques sem sair da sua cara.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-success"></i>
              </div>
              <h3>Use sua influência</h3>
              <p class="lead mb-0">Seu único trabalho será criar e divulgar a sua camapanha, o resto nós fazemos.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-success"></i>
              </div>
              <h3>Camisetas e personalizadas e limitadas</h3>
              <p class="lead mb-0">Sua camiseta será exclusiva, personalizada por você, do seu jeito.</p>
            </div>
          </div>
        </div>
      </div>
</section> 

    <section id="team">
        <div class="container">
            <h2 class="text-center "><span class="font-in">Campanhas</span></h2>
            <div class="row pt-5">
                <!-- Team member -->
                <div class="col-sm-4 col-sm-offset-5 mx-auto text-center">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="IMG/ebano.jpg" style="width: 100%;">
                        <h5>Ébano</h5>
                        <h5>Marca</h5>
                        <h6 class="mb-0">124 Seguidores</h6>
                        <p class="font-weight-light mb-0">Uma marca sem definições ou rótulos. Personalidade é tudo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->

    <button class="back-to-top" type="button"> <span style="font-size: 1.2em; color: white;">
                      <i class="fas fa-caret-up"></i>
                        </span></button>
<!--
 <div class="p-5">
        <div class="container pt-3" >
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-2.png);">
                        <div class="catagory-content">
                            <a href="#" class="btn btn-outline-info">CAMISETAS</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-3.png);">
                        <div class="catagory-content">
                            <a href="#"  class="btn btn-outline-info">BLUSAS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
   <?php include 'footer.php' ?>
   

</body>

</html>
