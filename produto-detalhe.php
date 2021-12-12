<?php
    // include dos arquivos de dados
    include_once './include/_dados.php';

    // include dos arquivos de header da pagina
    include_once './include/_header.php';

    // menu
    include_once './include/_menu.php';
?>
<?php
// captura o código informado pelo usuário no click
$codigo = $_GET['cod'];
// produto com o código informado
$produto = $categoriasdosprodutos[ $codigo ];
?>

    <div class="container bootdey">
    <div class="col-md-12">
    <section class="panel">
          <div class="panel-body">
              <div class="col-md-6">
                  <div class="pro-img-details">
                  <h1><?php echo $produto['nome'].'<br>';?></h1>
                  <img class="card-img-top" src="fotos/<?php echo $produto['foto'];?>" alt="imagem de capa">
                  </div>                  
              </div>
              <div class="col-md-6">
                  <h4 class="pro-d-title">
                    Descrição do Produto
                  </h4>
                  <p>
                    Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best product descriptions address your ideal buyer directly and personally. The best product descriptions address your ideal buyer directly and personally.
                  </p>
                  <div class="product_meta">
                      <span class="tagged_as"><strong>Filtros:</strong> <a rel="tag" href="#">Intrumentros</a>, <a rel="tag" href="#">Antigos</a>.</span>
                  </div>
                  <div class="m-bot15"> <strong>Preço : </strong> <span class="amount-old">R$ 13.000,00</span>  <span class="pro-price"><?php echo $produto['preco'].'<br>';?></span></div>
                  <div class="form-group">
                      <label>Quantidade</label>
                      <input type="quantiy" placeholder="1" class="form-control quantity">
                  </div>
                  <p>
                    <button class="btn btn-round btn-danger" type="button"><i class="fa fa-shopping-cart"></i> Comprar</button>
                  </p>
              </div>
          </div>
      </section>
      </div>
      </div>
<br><br>    
<?php      
// captura o código informado pelo usuário no click
$codigo = $_GET['cod'];
// produto com o código informado
$produto = $categoriasdosprodutos[ $codigo ];

// include dos arquivos de rodape
include_once './include/_footer.php';

    
?>