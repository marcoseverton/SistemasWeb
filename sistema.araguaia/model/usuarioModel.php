<?php
function __autoload($classe){
    include_once "config/conect/{$classe}.class.php";
    include_once "../controller/{$classe}.class.php";
}


class usuarioModel
{

    private $conexao;
    private $objFunction;
    private $coUsuario;
    private $nome;
    private $cpf;
    private $email;
    private $senha;
    private $dataCadastro;
    private $coPerfil;

    public function __construct() {
        $this->conexao = new conectaDB();
        $this->objFunction = new funcoesController();
    }

    public function __set($atributo, $valor)
    {
        // TODO: Implement __set() method.
        $this->atributo = $valor;
    }

    public function __get($atributo)
    {
        // TODO: Implement __get() method.
        return $this->atributo;
    }


    public function getSelections($dado){
        try {
            $this->coUsuario = $this->objFunction->base64($dado, 2);
            $sql = 'select id_usuario, no_usuario, ds_email from tb_usuario where id_usuario: id_usuario';
            $cst = $this->conexao->getConnection()->prepare($sql);
            $cst->bindParam('id_usuario', $this->coUsuario, PDO::PARAM_INT);
            $cst->execute();
            return $cst->fetch();
        }   catch (PDOException $ex){
            echo '<div style="text-align: center; margin-top: 40px;">
                    <b>ERRO: </b>'.$ex->getMessage().
                $ex->getLine().'</div>';
        }
    }

    public function getSelect($query){
        try {
            $sql = 'select id_usuario, no_usuario, ds_email from tb_usuario';
            $cst = $this->conexao->getConnection()->prepare($sql);
            $cst->execute();
            return $cst->fetchAll();
        }   catch (PDOException $ex){
            echo '<div style="text-align: center; margin-top: 40px;">
                    <b>ERRO: </b>'.$ex->getMessage().
                $ex->getLine().'</div>';
        }
    }

    public function getSelect($query){
        try {

        }   catch (PDOException $ex){
            echo '<div style="text-align: center; margin-top: 40px;">
                    <b>ERRO: </b>'.$ex->getMessage().
                $ex->getLine().'</div>';
        }
    }

    public function getInsert($query){
        try {

        }   catch (PDOException $ex){
            echo '<div style="text-align: center; margin-top: 40px;">
                    <b>ERRO: </b>'.$ex->getMessage().
                $ex->getLine().'</div>';
        }
    }

    public function getDelete($query){
        try {

        }   catch (PDOException $ex){
            echo '<div style="text-align: center; margin-top: 40px;">
                    <b>ERRO: </b>'.$ex->getMessage().
                $ex->getLine().'</div>';
        }
    }

    public function getUpdate($query){
        try {

        }   catch (PDOException $ex){
            echo '<div style="text-align: center; margin-top: 40px;">
                    <b>ERRO: </b>'.$ex->getMessage().
                $ex->getLine().'</div>';
        }
    }

    /*
    public function getUser($cpf, $senha){

        try {
            $conn = $this->getConnection();
            $sql = "SELECT * FROM ".database::TABLE_USER." u
             join ".database::TABLE_PERFIL." p on p.co_perfil = u.co_perfil
             WHERE nu_cpf   = :nu_cpf and 
                   ds_senha = :senha ";
            $stmt = $conn->prepare($sql);
            $stmt->execute(array ('nu_cpf' => $cpf, 'ds_senha'=>$senha));

            $result = $stmt->fetchAll();

            if (count($result) ) {
                foreach($result as $row) {
                    print_r($row);
                }
            } else {
                echo "Nennhum resultado retornado.";
            }

        } catch (PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    */

}

