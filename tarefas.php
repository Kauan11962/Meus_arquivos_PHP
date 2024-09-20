<?php session_start(); 
    //É uma função de abertura para o uso da suber global $_SESSION
    //Quando clicarmos no botão cadastrar apenas a tarefa nova é listada
    //O php trabalha principalmente com web e neste caso o que acontece a cada nova requisição que faremos, seja pedindo uma página, seja enviando dados, é que o PHP interpreta tudo de novo e devolve apenas HTML para o navegador. Ele não lembra o que aconteceu na última requisição feita
    //Mais para isso o PHP tem um recurso que auxiliará a solucionar isso
    //Que é o caso da super global $_SESSION que vai manter os dados entre requisições
    //Diferença entre a super global $_GET e $_SESSION, você usa mais o $_GET para ler informações e vou usar $_SESSION para escrever e ler informação.
 ?>
<html>
    <head>
        <title>Gerenciador de Tarefas</title>    
    </head>

    <body>
        <h1>Gerenciador de Tarefas</h1>
        <form>
            <fieldset>
                <legend>Nova tarefa</legend>
                <label>
                    Tarefa:
                    <input type='text' name='nome'/>
                </label>
                <input type='submit' value='Cadastrar'/>
            </fieldset>
        </form>
        <?php 
            // $_GET é uma super global utilizada para recuperar dados eviados para o servidor através do URL
            // exemplo: o if vai verificar se o índice nome existe através da função isset, caso exista ele vai exibir usando echo
            /* 
            if (isset($_GET['nome'])){
                echo "Nome informado: " . $_GET['nome'];
            }
            */
            
            //Nesta linha de código o if ele verifica se foi escrito algo no input (nome) coloca dentro do array $listar_tarefa e imprime la embeixo no foreache
            //$lista_tarefa = array();
            
            //if (isset($_GET['nome']))
            //{
            //    $lista_tarefa[] = $_GET['nome'];
            //}

            //aqui a mesma coisa só que usamos o SESSION para quarda requisições ateriores e imprimir todas as irformações inseridas mesmo atualizando a página
            if(isset($_GET['nome'])){
                $_SESSION['lista_tarefas'][] = $_GET['nome'];
            }

            $lista_tarefas = array();
            
            if (isset($_SESSION['lista_tarefas'])){
                $lista_tarefas = $_SESSION['lista_tarefas'];
            }
        ?>

        <table>
            <tr>
                <th>Tarefas</th>
            </tr>

            <!-- ESsa linha de código tem outra forma de escrever usando com chaves, mas esta form usando dois ponto para abrir o bloco e a palavra endforech fica mais legível em templates HTML -->
            <?php foreach ($lista_tarefas as $tarefa) : ?>
                <!-- foreach é um laço que serve para passar por todos índices de um array, atribuindo cada índice a uma variável que escolhemos -->
                <tr>
                    <th><?php echo $tarefa; ?></th>
                </tr>
            <?php endforeach; ?>    
            <!-- existe outros blocos com a mesma sintaxe if e endif, while e endwhile e for e endfor -->

            <!-- Exemplo do código acima usando chaves -->  
            <?php //foreach ($lista_tarefa as $tarefa) { ?>
                <!--
                <tr>
                    <td><?php echo $tarefa; ?></td>
                </tr>
                -->
            <?php //} ?>
        </table>
    </body>
</html>