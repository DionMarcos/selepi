<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Contato</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        
        <div class="container">
            <div class="row">


    
    

        <div class="container">
            <div class="row">

                <?php

                /* ------------------ PRODUCT WIDGET AREA ------------------*/
                /* ------------------ MAIS VENDIDOS ------------------------*/
                $this->load->view('frontend/template/search-products-left.php');

                ?>

                <div class="col-md-8">
                            
                                  <h3 class="box-title">Envie uma mensagem...</h3>

                               
                                  <form role="form">
                                    <!-- text input -->
                                    <div class="form-group">
                                      <label>Nome</label>
                                      <input type="text" class="form-control" required="required">
                                    </div>


                                    <div class="form-group">
                                      <label>E-mail</label>
                                      <input type="text" class="form-control"  required="required">
                                    </div>

                                    <div class="form-group">
                                      <label>Estado</label>
                                      <select multiple class="form-control"  required="required" >
                                        <option value="estado">Selecione o Estado</option> 
                                        <option value="ac">Acre</option> 
                                        <option value="al">Alagoas</option> 
                                        <option value="am">Amazonas</option> 
                                        <option value="ap">Amapá</option> 
                                        <option value="ba">Bahia</option> 
                                        <option value="ce">Ceará</option> 
                                        <option value="df">Distrito Federal</option> 
                                        <option value="es">Espírito Santo</option> 
                                        <option value="go">Goiás</option> 
                                        <option value="ma">Maranhão</option> 
                                        <option value="mt">Mato Grosso</option> 
                                        <option value="ms">Mato Grosso do Sul</option> 
                                        <option value="mg">Minas Gerais</option> 
                                        <option value="pa">Pará</option> 
                                        <option value="pb">Paraíba</option> 
                                        <option value="pr">Paraná</option> 
                                        <option value="pe">Pernambuco</option> 
                                        <option value="pi">Piauí</option> 
                                        <option value="rj">Rio de Janeiro</option> 
                                        <option value="rn">Rio Grande do Norte</option> 
                                        <option value="ro">Rondônia</option> 
                                        <option value="rs">Rio Grande do Sul</option> 
                                        <option value="rr">Roraima</option> 
                                        <option value="sc">Santa Catarina</option> 
                                        <option value="se">Sergipe</option> 
                                        <option value="sp">São Paulo</option> 
                                        <option value="to">Tocantins</option> 
                                      </select>
                                    </div>

                                    <div class="form-group">
                                      <label>Cidade</label>
                                      <input type="text" class="form-control"  required="required" >
                                    </div>

                                    <div class="form-group">
                                      <label>Telefone</label>
                                      <input type="tel" class="form-control" placeholder="Ex: 41 99581-4222"  required="required" >
                                    </div>

                                    <!-- textarea -->
                                    <div class="form-group">
                                      <label>Mensagem</label>
                                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea  required="required">
                                    </div> 

                                    <input type="submit" name="" class="btn-success-order">

                                    <br>

                                  </form>
                                
                              
                   
                </div>
            </div>
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
