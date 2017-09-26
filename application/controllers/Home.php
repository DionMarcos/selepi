<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	
	public function index()
	{

		/* ------------------ MODEL PRODUTOS -----------------*/
		$this->load->model('produtos_model', 'modelprodutos');
		$this->produtos = $this->modelprodutos->listar_todos_produtos();


		$dados['produtos'] = $this->produtos;

		/* ------------------ TOPO ---------------------*/
		$this->load->view('frontend/template/html_top.php');
		$this->load->view('frontend/template/head.php');

		/* ------------------ HEADER AREA -------------------------*/
		/* ------------------ MENU CINZA SUPERIOR -----------------*/
		$this->load->view('frontend/template/header-area.php'); 

		/* ------------------ BRANDING AREA ------------------------*/
		/* ------------------ AREA LOGOMARCA E CARRINHO ------------*/		   
	    $this->load->view('frontend/template/site-branding-area.php');

	    /* ------------------ MAIN MENU --------------------------*/
    	/* ------------------ MENU PRINCIPAL ---------------------*/
    	$this->load->view('frontend/template/mainmenu-area.php');


	    /* --------------------------------------------------------------------- */
	    	/* ------------------ HOME ---------------------*/ 
		    $this->load->view('frontend/home.php', $dados); 
		/* --------------------------------------------------------------------- */

		$this->load->view('frontend/template/html_bottom.php');
		

		/* ------------------ RODAPE ---------------------*/    
		$this->load->view('frontend/template/footer-top-area.php');
		$this->load->view('frontend/template/footer-bottom-area.php'); 

		/* ------------------ SCRIPTS JS ---------------------*/ 
		$this->load->view('frontend/template/scripts.php');
	}

	

	
}
