<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
      

    /* ------------------ SLIDER AREA ---------------------*/
    /* ------------------ SLIDE SHOW DA HOME --------------*/ 
    $this->load->view('frontend/home/slider-area.php');

    /* ------------------ PROMO AREA ----------------------*/
    /* ------------------ ICONES DE ATENDIMENTO -----------*/
    $this->load->view('frontend/home/promo-area.php');

    /* ------------------ MAIN CONTENT -------------------------*/
    /* ------------------ PRODUTOS -----------------------------*/
    $this->load->view('frontend/home/maincontent-area.php');

	/* ------------------ BRANDS AREA ---------------------------*/
    /* ------------------ CLIENTES ---------------------------------*/
    $this->load->view('frontend/home/brands-area.php');

    /* ------------------ PRODUCT WIDGET AREA ------------------*/
    /* ------------------ MAIS VENDIDOS ------------------------*/
    $this->load->view('frontend/home/product-widget-area.php');

    
	  
?>
