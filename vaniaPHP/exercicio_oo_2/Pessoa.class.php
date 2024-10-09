<?php
// Definindo a classe Pessoa, que serve como a classe mãe (base)
class Pessoa 
{
    // O construtor define a inicialização do objeto. 
    // A propriedade '$nome' é inicializada com um valor padrão vazio (""), e é protegida (protected).
    public function __construct(protected string $nome = "") {} 

    // Método getter (getNome) para acessar o valor da propriedade '$nome'.
    // Este método retorna o valor armazenado na propriedade '$nome'.
    public function getNome() 
    {
        return $this->nome; // Retorna o valor de '$nome' da instância da classe.
    }

    // Método setter (setNome) para modificar o valor da propriedade '$nome'.
    // Este método recebe um parâmetro '$nome' e atribui esse valor à propriedade '$nome'.
    public function setNome($nome)
    {
        $this->nome = $nome; // Atribui o valor do parâmetro '$nome' à propriedade '$nome'.
    }
}
?>
