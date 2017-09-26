<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Produtos</h2>
                        <div class="product-carousel">

                            <?php

                            foreach ($produtos as $produto) {
                                
                            ?>

                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="<?php echo base_url('assets/frontend/img/product-1.png'); ?>" alt="">
                                    <div class="product-hover">
                                        <!--<a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Adicionar</a>-->
                                        <a href="#" class="view-details-link"><i class="fa fa-plus"></i> Detalhes</a>
                                    </div>
                                </div>
                                
                                <h2><a href="#"><?php echo $produto->nome;?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>R$700.00</ins> <del>R$800.00</del>
                                </div> 
                            </div><!-- CLOSE single-product -->

                            <?php
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->