<?php

namespace ApiCep\Controller;

use ApiCep1\Model\EnderecoModel as ModelEnderecoModel;
use ApiCep1\Model\{ EnderecoModel, CidadeModel };
use Exception;

class EnderecoController extends Controller
{
    public static function getLogradouroByBairroAndCidade() : void
    {
    }

    public static function getLogradouroByCep() : void
    {
    }

    public static function getBairrosByIdCidade() : void
    {
    }

    public static function getCidadesByUF() : void
    {
    }

    public static function getCepByLogradouro() : void
    {
        try
        {
            $logradouro = $_GET['logradouro'];

            $model = new EnderecoModel();
            $model->getCepByLogradouro($logradouro);

            parent::getResponseAsJSON($model->rows);
        }
        catch (Exception $e)
        {
            parent::getResponseAsJSON($e);
        }
    }
}