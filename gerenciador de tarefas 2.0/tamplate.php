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
                    <textarea nome='descricao'></textarea>
                </label>
                <label>
                    Prazo (Opicional)
                    <input type='text' name='prazo' />
                </label>
                <br>
                <input type='submit' value='Cadastrar' />
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
            <input type='submit' value='Cadastrar' />
            </fieldset>
        </form>
        <table>
            <th>
                <tr>Tarefas</tr>
            </th>
            <?php foreach ($listar_tarefas as $tarefas) : ?>
                <th>
                    <tr><?php echo $tarefas; ?></tr>
                </th>
            <?php endforeach ?>
        </table>
    </doby>
</html>