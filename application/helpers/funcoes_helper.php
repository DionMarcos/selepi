<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function limpar($string){

	//Pre remocao de acentos
	$string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);

	$table = array(
        '/'=>'', '('=>'', ')'=>'',
    );
    // Traduz os caracteres em $string, baseado no vetor $table
    $string = strtr($string, $table);
	$string= preg_replace('/[,.;:`´^~\'"]/', null, iconv('UTF-8','ASCII//TRANSLIT',$string));
	$string= strtolower($string);
	$string= str_replace(" ", "-", $string);
	$string= str_replace("---", "-", $string);

	

	return $string;
}

/* ----------------------------------- RETORNA FLOAT DINHEIRO FORMATO BR ---------------*/

function money_br($numero)
{
    $numero = number_format($numero, 2, ',', '.'); 
    return $numero;
}

/* ----------------------------------- RETORNA VALOR COM DESCONTO ---------------*/

function valor_desconto($porcentagem, $valor)
{
	//$valor = preco do produto
	//$porcentagem = desconto
    $resultado = $valor - ($valor*($porcentagem/100));

    return money_br($resultado);
}