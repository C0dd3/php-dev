<?php

class Usuario { # POO-DAO-SELECT

    # Permiti selecionar recursos no banco de dados:

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;


    public function getIdusuario() {
        return $this->idusuario;
    }

    public function setIdusuario($value) {
        $this->idusuario = $value;
    }

    public function getDeslogin() {
        return $this->deslogin;
    }

    public function setDeslogin($value) {
        $this->deslogin = $value;
    }

    public function getDessenha() {
        return $this->dessenha;
    }

    public function setDessenha($value) {
        $this->dessenha = $value;
    }

    public function getDtcadastro() {
        return $this->dtcadastro;
    }

    public function setDtcadastro($value) {
        $this->dtcadastro = $value;
    }

    public function loadById($id) { # Verifica usuário dentro de BD.

        $sql = new Sql();

        $result = $sql->select("SELECT * FROM tb_usuario WHERE idusuario = :ID", array(
            ":ID"=>$id
        )); # Dessa forma é possível criar um select que veja os parametros dentro do BD

        if(isset($result)) { # Verifica se existe elementos no BD

            $row = $result[0];

            # Para cada set, haverá um resultado oridunda de um array dentro do banco.

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro($row['dtcadastro']);

            //Continue...
        }

    }

}

?>