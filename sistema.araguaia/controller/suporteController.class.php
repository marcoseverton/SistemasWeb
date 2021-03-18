<?php

class suporteController
{
    public $help;

    public function __construct()
    {
        $this->help = false;
    }

    public function getAjuda($resposta){
        try {
            if (!empty($resposta) && $resposta == 1){
                $this->help = true;
                header("https://api.whatsapp.com/send?phone=5561983148089&text=Atendimento%22%20%22de%22%20%22TI.");
            }
        }catch (ErrorException $e){
            echo "Erro: ".$e->getMessage()."<br/>".
                 $e->getCode();
        }
        return $this->help;
    }
    //header ();
}

$teste = new suporteController();
$sim = 1;
$teste->getAjuda($sim);