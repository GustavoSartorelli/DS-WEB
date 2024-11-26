<?php 
    function soma($n1,$n2){
        $resultado = $n1 + $n2;
        echo $result;
    }
    function subtração($n1,$n2){
        $resultado = $n1 - $n2;
        echo $result;
    }
    function divisão($n1,$n2){
        $resultado = $n1 / $n2;
        echo $result;
    }
    function multiplicação($n1,$n2){
        $resultado = $n1 * $n2;
        echo $result;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Calculadora</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <h2>CALCULADORA</h2>
        <label for="PrimeiroValor">Primeiro Valor:</label>
        <input type="number" name="PrimeiroValor" max="9999" required><br>

        <label for="SegundoValor">Segundo Valor:</label>
        <input type="number" name="SegundoValor" max="9999" required><br>

        <select name="objetivo" required>
            <option value="">Selecione a operação</option>
            <option value="Som">Soma</option>
            <option value="Subt">Subtração</option>
            <option value="Multi">Multiplicação</option>
            <option value="Divi">Divisão</option>
        </select>
        <br><br>

        
        <input type="reset">
        <input type="submit" name="enviar" value="Calcular">
        <br>
        <span>Resultado:</span>
        <?php

            if(!empty($_POST)){
                $num1 = $_POST['PrimeiroValor'];
                $num2 = $_POST['SegundoValor'];
                $OP = $_POST['objetivo'];

                if($OP == "Divi" && $num2 == 0){echo "erro no sistema";}
                
                if($OP == "Som"){echo $num1 + $num2;}
                if($OP == "Subt"){echo $num1 - $num2;}
                if($OP == "Multi"){echo $num1 * $num2;}
                if($OP == "Divi"){echo $num1 / $num2;}
            }

        ?>
    </form>
    

</body>
</html>

