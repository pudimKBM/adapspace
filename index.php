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
<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>100% Digital</h3>
              <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>Bootstrap 4 Ready</h3>
              <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Easy to Use</h3>
              <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
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
                <div class="col-xs-12 col-sm-6 col-md-3 mx-auto" >
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="card-img-top img-card" src="IMG/ebano.jpg">
                                        <div class="card-body">
                                        <h4 class="card-title font-in">Ébano</h4>
                                            <h5 class="card-subtitle mb-2 font-in">Marca</h5>
                                            <h5 class="card-subtitle mb-2 font-in">124 Seguidores</h6>
                                                <span style="font-size: 1.7em; color: #11998e;">
                        <i class="fas fa-angle-double-right"></i>
                        </span>     
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title font-in">Somos a Ébano</h4>
                                        <p class="card-text font-in">Uma marca sem definições ou rótulos. Personalidade é tudo.</p>
                                        <span style="font-size: 1.7em; color: #11998e;">
                        <i class="fab fa-facebook-square "></i>
                        </span>
                                        <span style="font-size: 1.7em; color: #11998e;">
                        <i class="fab fa-twitter-square "></i>
                        </span>
                                        <span style="font-size: 1.7em; color: #11998e;">
                        <i class="fab fa-instagram "></i>
                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>
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
