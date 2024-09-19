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
            // $_GET é utilizada para recuperar dados eviados para o servidor através do URL
            // exemplo: o if vai verificar se o índice nome existe através da função isset, caso exista ele vai exibir usando echo
            /* 
            if (isset($_GET['nome'])){
                echo "Nome informado: " . $_GET['nome'];
            }
            */
            
            $lista_tarefa = array();
            
            if (isset($_GET['nome']))
            {
                $lista_tarefa[] = $_GET['nome'];
            }
        ?>

        <table>
            <tr>
                <th>Tarefas</th>
            </tr>

            <!-- ESsa linha de código tem outra forma de escrever usando com chaves, mas esta form usando dois ponto para abrir o bloco e a palavra endforech fica mais legível em templates HTML -->
            <?php foreach ($lista_tarefa as $tarefa) : ?>
                <!-- foreach é um laço que serve para passar por todos índices de um array, atribuindo cada índice a uma variável que escolhemos -->
                <tr>
                    <th><?php echo $tarefa; ?></th>
                </tr>
            <?php endforeach; ?>    
            <!-- existe outros blocos com a mesma sintaxe if e endif, while e endwhile e for e endfor -->

            <!-- Exemplo do código acima usando chaves -->
            <?php foreach ($lista_tarefa as $tarefa) { ?>
                <!--
                <tr>
                    <td><?php echo $tarefa; ?></td>
                </tr>
                -->
            <?php } ?>
        </table>
    </body>
</html>