<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php

    foreach ($produtos as $produto);
                                
?>    


    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2><?php echo $produto->nome;?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->

<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                
                <?php

                /* ------------------ PRODUCT WIDGET AREA ------------------*/
                /* ------------------ MAIS VENDIDOS ------------------------*/
                $this->load->view('frontend/template/search-products-left.php');

                ?>
                
                <div class="col-md-8">
                    <div class="product-content-right">                        
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">

                                <?php
                                    //IMAGEM
                                    $img = base64_encode($produto->imagem);                            
                                    $ext = $produto->extensao;
                                ?>

<!-- ***************************************************************************************** -->






 
                            <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                                <div class='carousel-outer'>
                                    <!-- me art lab slider -->
                                    <div class='carousel-inner '>
                                        <div class='item active product-main-img'>
                                            <img src='data:image/<?php echo $ext;?>;base64, <?php echo $img;?>' alt='' data-zoom-image="data:image/<?php echo $ext;?>;base64, <?php echo $img;?>" id="zoom_05"/>
                                        </div>
                                        <div class='item'>
                                            <img src='data:image/<?php echo $ext;?>;base64, <?php echo $img;?>' alt='' data-zoom-image="data:image/<?php echo $ext;?>;base64, <?php echo $img;?>" id="zoom_05" />
                                        </div>
                                        <div class='item'>
                                            <img src='data:image/<?php echo $ext;?>;base64, <?php echo $img;?>' alt='' data-zoom-image="data:image/<?php echo $ext;?>;base64, <?php echo $img;?>" id="zoom_05" />
                                        </div>

                                            
                                        
                                        <script>
                                          $("#zoom_05").elevateZoom({ zoomType    : "inner", cursor: "crosshair" });
                                        </script>       
                                        
                                    <!-- sag sol -->
                                    <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                        <span class='glyphicon glyphicon-chevron-left'></span>
                                    </a>
                                    <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                        <span class='glyphicon glyphicon-chevron-right'></span>
                                    </a>
                                </div>
                                
                                <!-- thumb -->
                                <ol class='carousel-indicators mCustomScrollbar meartlab'>
                                    <li data-target='#carousel-custom' data-slide-to='0' class='active'>
                                        <img src='data:image/<?php echo $ext;?>;base64, <?php echo $img;?>' alt='' />
                                    </li>
                                    <li data-target='#carousel-custom' data-slide-to='1'>
                                        <img src='data:image/<?php echo $ext;?>;base64, <?php echo $img;?>' alt='' />
                                    </li>
                                    <li data-target='#carousel-custom' data-slide-to='2'>
                                        <img src='data:image/<?php echo $ext;?>;base64, <?php echo $img;?>' alt='' />
                                    </li>
                                    

                                </ol>
                            </div>
                            </div>

                            <script type="text/javascript">

                            $(document).ready(function() {
                                $(".mCustomScrollbar").mCustomScrollbar({axis:"x"});
                            });
                            </script>
                            
                            
















<!-- ****************************************************************************************************** -->

                                    


                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $produto->nome;?></h2>
                                    <div class="product-inner-price">
                                        <del>De R$<?php echo money_br($produto->valor);?></del>
                                 
                                <ins>Por R$<?php echo valor_desconto($produto->desconto_ecommerce,$produto->valor);?></ins> 
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>

                                        <input type="submit" class="add_to_cart_button" type="submit" value="Comprar">
                                        
                                    </form>   

                                    
                                    <div class="product-inner-category">
                                        <p>
                                            <b>Categorias:</b> <a href="">Água</a> | <a href="">lubrificantes</a> | <a href="">Embelezamento</a> | <a href="">Carros</a> | <a href="">Motos</a>
                                        </p>
                                    </div> 
                                    
                                   
                                    
                                </div>
                            </div>


                            <div class="col-sm-6">
                                    <div role="">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#" aria-controls="home" role="tab" data-toggle="tab">Descrição do Produto</a></li>
                                            
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Descrição do Produto</h2>  
                                                <?php echo $produto->descricao;?>
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
