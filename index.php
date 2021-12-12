<?php
include_once'./include/_dados.php';
include_once'./include/_header.php';
include_once'./include/_menu.php';
?>

<?php

$cat = $_GET['cat'];

?>
    
<main>
      
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/capa.1.jpg" width="100%" height="100%">
            <div class="container">
              <div class="carousel-caption text-start">
              </div>
            </div>
          </div>
          <div class="carousel-item">
              <img src="img/capa.2.jpg" width="100%" height="100%">
            <div class="container">
              <div class="carousel-caption">
               
              </div>
            </div>
          </div>
          <div class="carousel-item">
          <img src="img/capa.3.jpg" width="100%" height="100%">
           <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>-->

            <div class="container">
              <div class="carousel-caption text-end">
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
      </div>
    
    
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
    
      <div class="container marketing">

        <?php
            $tamanhoarray = sizeof($categoriasdosprodutos);
            $quantidadefileiras = round($tamanhoarray/3);

            $tamanhototal = 0;
            
            for ($i = 0; $i < $quantidadefileiras; $i++) {

              echo "<div class=\"row\">";

              for ($l = 0; $l <= 2; $l++) {

                $produtoatual = $categoriasdosprodutos[$tamanhototal];

                $categoria = $produtoatual['categoria'];

                if ($cat != "nil") {
                  if ($categoria == $cat) {
                    echo "<div class=\"col-lg-4\">
                    <img src=\"fotos/{$produtoatual['foto']}\">
                   
              
                     <h2>{$produtoatual['nome']}</h2>
                      <p>Preço: {$produtoatual['preco']}</p>
                      <p><a class=\"btn btn-secondary\" href=\"produto-detalhe.php?cod={$tamanhototal}\">Ver Detalhes</a></p>
                    </div><!-- /.col-lg-4 -->
                    ";
                  }
                } else {
                  echo "<div class=\"col-lg-4\">
                  <img src=\"fotos/{$produtoatual['foto']}\">
                 
            
                   <h2>{$produtoatual['nome']}</h2>
                    <p>Preço: {$produtoatual['preco']}</p>
                    <p><a class=\"btn btn-secondary\" href=\"produto-detalhe.php?cod={$tamanhototal}\">Ver Detalhes</a></p>
                  </div><!-- /.col-lg-4 -->
                  ";
                }

                $tamanhototal += 1;
              }

              echo "</div>";
            }
            
       ?>
      
        <!-- START THE FEATURETTES -->
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Endereço <span class="text-muted"> Bard Hut!</span></h2>
            <p class="lead"> R. Olávo Barreto Viana, 36 - Moinhos de Vento, Porto Alegre - RS, 90570-070.</p>
           <button href="https://www.google.com/maps/place/R.+Ol%C3%A1vo+Barreto+Viana,+36+-+Moinhos+de+Vento,+Porto+Alegre+-+RS,+90570-070/@-30.02331,-51.2033005,17z/data=!3m1!4b1!4m5!3m4!1s0x951979b7c40e65eb:0xf5671c642dde6a6d!8m2!3d-30.02331!4d-51.2011118">
           <a href="https://www.google.com/maps/place/R.+Ol%C3%A1vo+Barreto+Viana,+36+-+Moinhos+de+Vento,+Porto+Alegre+-+RS,+90570-070/@-30.02331,-51.2033005,17z/data=!3m1!4b1!4m5!3m4!1s0x951979b7c40e65eb:0xf5671c642dde6a6d!8m2!3d-30.02331!4d-51.2011118" target="_blank"><img class="map" src="img/mapa1.png" width= 550px height="350px"></a> 
     
          </button>
          </div>
          <div class="col-md-5 order-md-1">
          <img src="img/local.jpg" width="100%" height="100%">
  
            <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
    
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Como entrar em contato? <span class="text-muted">Com a Bard Hut</span></h2>
            <p class="lead">Numero: 98453-2345</p>
            <p class="lead">Intagram: Bard_Hut</p>
            <p class="lead">Facebook: Bard__Hut</p>
            <p class="lead">Email: bardhut1996@ints.com</p>
          </div>
          <div class="col-md-5">
          <img src="img/intr.jpg" width="100%" height="100%">
            <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
    
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <!-- /END THE FEATURETTES -->
    
      </div><!-- /.container -->

     
<?php
    // include dos arquivos de rodape
    include_once './include/_footer.php';
?>