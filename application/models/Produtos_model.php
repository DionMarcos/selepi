<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Produtos_model extends CI_Model {

	//----CRUD----
	//   create
	//   read
	//   update
	//   delete
	

	public function __construct(){
		parent::__construct();
	}

	//READ
	public function listar_todos_produtos(){
		$this->db->order_by('nome', 'ASC');
		$this->db->select('id, nome, valor, desconto_ecommerce');
		return $this->db->get('produtos')->result();		
	}

	//READ
	public function listar_todos_produtos_img_principal(){
		$this->db->order_by('nome', 'ASC');
		$this->db->select('p.id, p.nome, p.valor, p.desconto_ecommerce, p_imagem.imagem, p_imagem.extensao');
		$this->db->join('produtos_imagem as p_imagem', 'p.id = p_imagem.produtos_id', 'inner');
		return $this->db->get('produtos as p')->result();		
	}

	//READ
	public function read_produto($id){		
    	$this->db->select('p.id, p.nome, p.valor, p.desconto_ecommerce, p_imagem.imagem, p_imagem.extensao, p.descricao');
    	$this->db->from('produtos as p');
    	$this->db->join('produtos_imagem as p_imagem', 'p.id = p_imagem.produtos_id', 'inner');
    	$this->db->where('p.id', $id);
    	$this->db->limit(1);
    	return $this->db->get()->result();		
	}

	

	
}
