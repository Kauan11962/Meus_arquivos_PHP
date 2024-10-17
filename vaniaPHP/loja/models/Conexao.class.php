<?php
    abstract class Conexao
    {
        public function __construct(protected $db = null)
        {

            $parametros = "mysql:host=localhost;dbname=bd_loja;";
            try
            {
                $this->db = new PDO($parametros, "root", "");
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