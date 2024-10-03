<html>
    <head>
        <meta charset = 'utf-8' />
        <title>Gerenciador de Tarefas</title>
        <link rel='stylesheet' href='tarefas.css' type='text/css' />
    </head>
    <body>
        <h1>Gerenciador de Tarefas</h1>
        <form>
            <fieldset>
                <legend>Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <input type='text' name='nome' />
                </label>
                <label>
                    Descrição (Opicional)
                    <textarea name='descricao'></textarea>
                </label>
                <label>
                    Prazo (Opicional)
                    <input type='text' name='prazo' />
                </label>
                <br>
            </fieldset>    
            <fieldset>
                <legend>Propriedade:</legend>
                <label>
                    <input type='radio' name='propriedade' value='baixa' checkd />
                    Baixa
                    <input type='radio' name='propriedade' value='media' />
                    Média
                    <input type='radio' name='propriedade' value='alta' />
                    Alta
                </label>
            </fieldset>
            <label>
                Tarefa concluida:
                <input type='checkbox' name='concluida' value='sim' />
            </label>   
            <input type='submit' value='Cadastrar' />
        </form>
        <table>
            <tr>
                <th>Tarefas</th>
                <th>Descrição</th>
                <th>Prazo</th>
                <th>Propriedade</th>
                <th>concluida</th>
            </tr>
            <?php foreach ($listar_tarefas as $tarefa) : ?>
                <tr>
                    <td><?php echo $tarefa['nome'] ?></td>
                    <td><?php echo $tarefa['descricao'] ?></td>
                    <td><?php echo $tarefa['prazo'] ?></td>
                    <td><?php echo $tarefa['propriedade'] ?></td>
                    <td><?php echo $tarefa['concluida'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>