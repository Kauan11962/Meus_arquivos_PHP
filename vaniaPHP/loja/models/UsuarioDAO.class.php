<?php
    class usuarioDAO extends Conexao
    {
        public function __construct()
        {
            parent:: __construct();
        }

        public function login($usuario)
        {
            $sql = "SELECT id_usuario, nome FROM usuario WHERE email = ? AND senha = ?";
            try
            {
                $stm = $this -> db -> prepare($sql);
                $stm -> bindValue(1, $usuario -> getEmail());
                $stm -> bindValue(2, $usuario -> getSenha());
                $stm->execute();
                $this->db = null;
                return $stm -> fetchALL(PDO::FETCH_OBJ);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
                echo $e->getCode();
                die();
            }           
        }
    }
?>