<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Produtos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                
                <?php

                    foreach ($produtos as $produto) {

                        $prod_id = $produto->id;
                        $prod_name = limpar($produto->nome);
                                
                ?>

                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <?php
                            //IMAGEM
                            $img = base64_encode($produto->imagem);                            
                            $ext = $produto->extensao;
                            ?>
                            <a href="">
                                <img class="shop-product-list" src="data:image/<?php echo $ext;?>;base64, <?php echo $img;?>" />
                            </a>
                            
                        </div>
                        <h2>
                            <a href=""><?php echo $produto->nome;?></a>
                        </h2>
                        <div class="product-carousel-price">
                            <del>De R$<?php echo money_br($produto->valor);?></del>
                            <a href="" class="no-link">    
                                <ins>Por R$<?php echo valor_desconto($produto->desconto_ecommerce,$produto->valor);?></ins> 
                            </a>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a href="<?php echo base_url('produto/'.$prod_id.'/'.$prod_name);?>" class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70"><i class="fa fa-search-plus"></i> DETALHES</a>
                        </div>                       
                    </div>
                </div>

                <?php
                    }
                ?>


                
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    /* ------------------ PRODUCT WIDGET AREA ------------------*/
    /* ------------------ MAIS VENDIDOS ------------------------*/
    //$this->load->view('frontend/home/product-widget-area.php');

    ?>