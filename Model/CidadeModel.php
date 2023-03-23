<?php

namespace ApiCep1\Model;

use ApiCep1\DAO\EnderecoDAO as DAOEnderecoDAO;
use ApiCep1\DAO\EnderecoDAO;
use ApiCep1\Model\Model;

class CidadeModel extends Model
{
    public $id_cidade, $descricao, $uf, $codigo_ibge, $ddd;

    public function getCidadesByUf($uf)
    {
        $dao = new EnderecoDAO();
        $this->rows = $dao->selectCidadesByUf($uf);
    }
}