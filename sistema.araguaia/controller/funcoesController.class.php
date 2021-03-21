<?php


class funcoesController
{

    public function tratarCaractere($valor, $tipo){

        switch ($tipo){
            case 1:
                $rst = utf8_decode($valor);
                break;
            case 2:
                $rst = html_entity_decode($valor, ENT_QUOTES, 'ISO-8859-1');
                break;
        }
        return $rst;
    }

    public function dataAtual($tipo){
        switch ($tipo){
            case 1:
                $rst = date('d/m/Y H:i:s');
                break;
            case 2:
                $rst = date('Y-m-d');
            case 3:
                $rst = date('d/m/y');
                break;
        }
        return $rst;
    }

    public function base64($tipo, $valor){
        switch ($tipo){
            case 1:
                $rst = base64_encode($valor);
                break;
            case 2:
                $rst = base64_decode($valor);
                break;
        }
        return $rst;
    }

}