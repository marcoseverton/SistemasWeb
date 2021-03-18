<?php
session_start();

require_once '../model/usuarioModel.php';

    class AcessoController extends usuarioModel
    {
        protected $cpf;

        public function __construct(){}

        public function acessoController($filtro01, $filtro02){ // ABRE MÉTODO acessoController()
            try {
                if (!session_status() !== PHP_SESSION_ACTIVE): session_start(); endif;

                $filtro01 = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
                $filtro02 = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

                $acao = new actionController();

                if (empty($filtro01)): $acao->setMensagem(E003); endif;

                $this->cpf = preg_replace('/[^0-9]/', "", $filtro01);

                if(!is_numeric($filtro01)): $acao->setMensagem(E001); endif;

                $_SESSION['cpf'] = $filtro01;

                $query = new usuarioModel();
                $query->getUser($filtro01, $filtro02);
                $url = '../view/inicio.phtml';
                $sucess = $acao->setMensagem(S001, $url);

                return $sucess;

            }catch (PDOException $ex){
                echo 'Ocorreu um erro: '.$ex->getMessage();
            }

        } // FECHA MÉTODO acessoController()

        public function  removeSession(){ // mata a sessão se ultrapassar 3 minutos de inatividade
            if (isset($_SESSION['atividade']) && ((time()) - ($_SESSION['atividade']) > 180)){
                session_unset();
                session_destroy();
                $url = '../index';
                $acao = new actionController();
                $acao->setMensagem(E004, $url);
            }
            $_SESSION['atividade'] = time();
        }
    }
