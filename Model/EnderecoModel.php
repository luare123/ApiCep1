<?php

namespace ApiCep1\Model;

use ApiCep1\DAO\EnderecoDAO as DAOEnderecoDAO;
use ApiCep1\DAO\EnderecoDAO;
use Exception;

class EnderecoModel extends Model
{
    public $id_logradouro , $tipo, $descricao , $id_cidade , $uf , $complemento, $descricao_sem_numero, $descricao_cidade, $codigo_cidade_ibge , $descricao_bairro;

    public $arr_cidades;

    public function getLogradouroByBairroAndCidade(string $bairro, int $id_cidade)
    {
        try 
        {
            $dao = new DAOEnderecoDAO();

            $this->rows = $dao->selectLogradouroByBairroAndCidade($bairro, $id_cidade);

        }
        catch (Exception $e) {
            throw $e;
        }
    }

    public function getLogradouraByCep(int $cep)
    {
        try
        {
            $dao = new EnderecoDAO();
        }
        catch(Exception $e)
        {
            throw $e;
        }
    }

    public function getCepByLogradouro ($logradouro)
    {
        try
        {
            $dao = new EnderecoDAO();

            $this->rows = $dao->selectCepByLogradouro($logradouro);
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
    }

}