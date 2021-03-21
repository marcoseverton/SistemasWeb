<?php
require_once 'mensagens.php';
function __autoload($classe){include_once "sistema.araguaia/config/conect/{$classe}.class.php";}

class actionController
{
    public $msg;

    public function setMensagem($msg, $redirect = null){
        $mensagem = $this->msg;

        if (!empty($redirect)){
            $url = $redirect;
            header("Location: .$url.php");
            die();
        }
        return $mensagem;
    }


}