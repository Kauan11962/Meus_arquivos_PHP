<?php 
    function linha($semana)
    {
        echo "<tr>";
        for ($i = 0; $i <= 6; $i++ ){
            //Função insset ela verifica se uma variavel foi definida 
            if(isset($semana[$i])) {
                echo "<td>{$semana[$i]}</td>";
            } else {
                echo "<td></td>";
            }
        }            
    }

    function calendario()
    {
        $dia = 1;
        $semana = array();
        while ($dia <= 31){
            //Função array_push adiciona mais um valor no array
            array_push($semana, $dia);

            //Funcão count ela conta quantidades de itens no array
            if(count($semana) == 7){
                linha($semana);
                $semana = array();
            }
            $dia++;
        }
        linha($semana);

    }
?>

<html>
    <table border="1">
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Seb</th>
        </tr>
        <?php calendario() ?>
    </table>    

    <h1><?php echo "Título dentro do H1"; ?></h1>
<html>


