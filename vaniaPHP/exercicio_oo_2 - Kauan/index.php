<?php
	require_once "Pessoa.class.php";
	require_once "Autor.class.php";
	require_once "Editora.class.php";
	require_once "Publicacoes.class.php";
	require_once "Livro.class.php";
	require_once "Emprestimo.class.php";
	require_once "Aluno.class.php";
	require_once "Itens.class.php";
	require_once "Genero.class.php";


	$aluno = new Aluno("11111", "Kauan clovis");
	

	$genero1 = new Genero("comedia"); $genero2 = new Genero("Terror"); $genero3 = new Genero("Aventura"); $genero4 = new Genero("suspense");

	$autor1 = new Autor("Brasileiro",array() , "Fulano"); $autor2 = new Autor("Brasileiro",array() ,"Ciclano");

	$editora = new Editora("1111111111.11", "João");

	$livro1 = new Livro("Homem morcego", "710", array($genero1, $genero2), array($autor1), "10/01/2024" , "The batman", $editora); $livro2 = new Livro("Homem morcego 2", "711", array($genero3, $genero4), array($autor2), "11/01/2024" , "Batminha", $editora);


	$emprestimo = new Emprestimo("10/10/2024",$aluno, "20/10/2024",$livro1);
	
	$emprestimo->setItens("30/10/2024", $livro2);
	
	
	echo "<h2>Livros</h2>";

	$i = 0;
	foreach($emprestimo->getItens() as $item) {
		$i++;
		$livro = $item->getLivro();
		$editora = $livro->getEditora();
		
		echo "<div class='livro-item'>";
		
		echo "<h3>Item $i</h3>";
		echo "<p><strong>Título:</strong> {$livro->getTitulo()} - <strong>ISBN:</strong> {$livro->getIsbn()}</p>";
		echo "<p><strong>Sinopse:</strong> {$livro->getSinopse()}</p>";
		echo "<p><strong>Editora:</strong> {$editora->getNome()} - <strong>CNPJ:</strong> {$editora->getCnpj()}</p>";
		echo "<p><strong>Data da Publicação:</strong> {$livro->getData_publicacao()}</p>";
		
		echo "<h4>Gêneros</h4><ul>";
		foreach($livro->getGenero() as $genero) {
			echo "<li>{$genero->getDescritivo()}</li>";
		}
		echo "</ul>";

		echo "<h4>Autor(es)</h4><ul>";
		foreach($livro->getAutor() as $autor) {
			echo "<li><strong>Nome:</strong> {$autor->getNome()} - <strong>Nacionalidade:</strong> {$autor->getNacionalidade()}</li>";
		}
		echo "</ul>";
		
		echo "</div><br>";
	}

	echo "<h3>Empréstimo de Livros</h3>";
	
	echo "Data do Empréstimo: {$emprestimo->getData_emprestimo()}<br>";
	
	echo "Aluno: {$emprestimo->getAluno()->getNome()} - Ra: {$emprestimo->getAluno()->getRa()}<br>";
	
?>