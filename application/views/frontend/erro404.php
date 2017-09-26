<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Página não encontrada | ERRO 404</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        
        <div class="container">
            <div class="row">

                	<div class="col-md-12">
			          
                        <div class="alert alert-danger text-center" role="alert">

			              <h3><i class="glyphicon glyphicon-remove-circle"></i> Infelizmente não conseguimos encontrar a página que você procura!</h3>
                        </div>   

             		</div>
         	</div>
        </div> 
     	  
            
    </div>
        

        <?php
        /* ------------------ PRODUCT WIDGET AREA ------------------*/
    	/* ------------------ MAIS VENDIDOS ------------------------*/
    	$this->load->view('frontend/home/product-widget-area.php');

    	?>