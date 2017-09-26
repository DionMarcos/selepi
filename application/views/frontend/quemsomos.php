<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Quem Somos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        
        <div class="container">
            <div class="row">

                    <div class="col-md-6">
                        <img class="img img-responsive" src="<?php echo base_url('assets/frontend/img/quemsomos.png');?>" alt="Quem somos" width="100%" >
                    </div>

                	<div class="col-md-6 quemsomos">
			          
			              <!-- post text -->
                            <h2>História</h2>
			              	<p>
                                Uma empresa com <b>9 anos de história</b>, criada a partir de um modelo moderno e inovador de gestão. Atuando fortemente no mercado paranaense, principalmente na região de Curitiba e também metropolitana.
			              	</p>

                            <h2>Expansão Nacional</h2>
			              	<p>
                                Empresa em grande fase de expansão buscando atingir todo o <b>mercado nacional</b> e possuindo em seu portfólio grandes redes de postos de combustíveis.
			              	</p>    

                            <h2>Qualidade</h2>
                            <p>
                                Nossos produtos passam pelos mais <b>rigorosos testes de qualidade</b>, tendo assim uma ampla gama de clientes satisfeitos. Hoje nosso carro chefe, são os líquidos de arrefecimento possuindo todos eles, qualificações e normas técnicas.
                            </p>

			              <!-- Attachment -->      
             		</div>

                    <div class="col-md-12 quemsomos">

                            <h2>Missão</h2>
                            <p>
                                Desenvolver, produzir e comercializar produtos automotivos gerando confiança e satisfação, garantindo a máxima <b>qualidade</b> aos clientes mais exigentes.
                            </p>
                            <h2>Visão</h2>
                            <p>
                                Ser <b>referência no mercado de produtos automotivos</b>, estando entre as principais empresas do ramo. Ter em nosso cliente, nosso foco principal visando à segurança das pessoas.                            
                                Colaboradoes comprometidos e realizados. <b>Excelência</b> e simplicadade na busca de resultados e em nosso desenvolvimento de produtos.
                            </p>

                            <h2>A melhor compra</h2>
                            <p>
                                Quando for substituir o liquido de arrefecimento de seu carro, escolha sempre <b>produtos RS4</b>, um produto 100% brasileiro e 100% garantido.
                            </p> 

                          <!-- Attachment -->      
                    </div>
         	</div>
        </div> 
     	

        <iframe style="width: 100%; margin-bottom: -100px; float: left; margin-top: 100px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1280.3252736661186!2d-49.23020257923231!3d-25.323172891586953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xceedb089ff16856b!2sRS4+Produtos+Automotivos!5e1!3m2!1spt-BR!2sbr!4v1503683298247"  height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
  
            
        </div>
        

        <?php
        /* ------------------ PRODUCT WIDGET AREA ------------------*/
    	/* ------------------ MAIS VENDIDOS ------------------------*/
    	$this->load->view('frontend/home/product-widget-area.php');

    	?>