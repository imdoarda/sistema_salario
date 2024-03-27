<!DOCTYPE html>
<html>

<head>
    <title>Tipo número</title>
    <link rel='stylesheet' type='text/css' media='screen' href='_css/style.css'>
    <script src='index.js'></script>

</head>
<body>
    <div class = "container">
      <!--pedir nome vendedor-->
    <h1>Informe os dados pedidos</h1>
    <form method="post">
    <label for="name">NOME:</label>
    <input type="text" name="name" />
    
    <!--informa valor feito na semana-->
    <label for="name">QUAL O VALOR FEITO NA SEMANA 1?</label>
    <input type="number" name="feito" />

    <label for="name">QUAL O VALOR FEITO NA SEMANA 2?</label>
    <input type="number" name="feito1" />
    
    <label for="name">QUAL O VALOR FEITO NA SEMANA 3?</label>
    <input type="number" name="feito2" />
    
    <label for="name">QUAL O VALOR FEITO NA SEMANA 4?</label>
    <input type="number" name="feito3" />

    <!--botão p/adicionar as informações-->
    <button type="submit" name="submit">Calcular</button>
    </form>
</div>


<?php 

//variáveis
$num2 = filter_input(INPUT_POST, "feito");
$num3 = filter_input(INPUT_POST, "feito1");
$num4 = filter_input(INPUT_POST, "feito2");
$num5 = filter_input(INPUT_POST, "feito3");
$num6 = intval($num2) + intval($num3) + intval($num4) + intval($num5);

if(!($num2 && $num3 && $num4 && $num5)){
    echo "<h2>Por favor, informe os dados pedidos.<h2>";
    return;
}
if($num2 < 0 || $num3 < 0 || $num4 < 0 || $num5 < 0){
    echo "<h2>Por favor, informe com dados positivos.<h2>";
    return;
}

//valores fixos

$metafixaSemanal = 20000;
$metafixaMensal = 80000;
$salario_minimo = 1927.02;

//Cálculo excedente

$valor1 = 0;
$percentualsem1 = 0;
    if ($num2 >= $metafixaSemanal) {
        $percentualsem1 = 1.0 / 100.0 * $metafixaSemanal;
        //echo "no if (" . $percentualsem1 . ")<br>";
        $valor1 = intval($num2) - intval($metafixaSemanal); //excedente semana 1
    }
    //echo "fora do if (" . $valor1 . ")<br>";
    
    $valor2 = 0;
    $percentualsem2 = 0;
    if ($num3 >= $metafixaSemanal) {
        $percentualsem2 = 1.0 / 100.0 * $metafixaSemanal;
        //echo "no if (" . $percentualsem2 . ")<br>";
        $valor2 = intval($num2) - intval($metafixaSemanal); //excedente semana 2
    }
    //echo "fora do if (" . $valor2 . ")<br>";

    $valor3 = 0;
    $percentualsem3= 0;
    if ($num4 >= $metafixaSemanal) {
        $percentualsem3 = 1.0 / 100.0 * $metafixaSemanal;
        //echo "no if (" . $percentualsem3 . ")<br>";
        $valor3 = intval($num4) - intval($metafixaSemanal); //excedente semana 3
    }
    //echo "fora do if (" . $valor3 . ")<br>";
     
    $valor4 = 0;
    $percentualsem4 = 0;
    if ($num5 >= $metafixaSemanal) {
        $percentualsem4 = 1.0 / 100.0 * $metafixaSemanal;
        //echo "no if (" . $percentualsem4 . ")<br>";
        $valor4 = intval($num5) - intval($metafixaSemanal); //excedente semana 4
    }
    //echo "fora do if (" . $valor4 . ")<br>";

    $valor5 = 0;
    if ($num6 > $metafixaMensal) {
        $valor5 = intval($num6) - intval($metafixaMensal); //excedente mês
    }
    //echo "fora do if (" . $valor5 . ")<br>";
    //inicia tudo como zero e, em caso de excedente, conta o valor
    
    //calculo metas concluidas

    $percentualexc2 = 5.0 / 100.0 * $valor1; 
    $percentualexc3 = 5.0 / 100.0 * $valor2; 
    $percentualexc4 = 5.0 / 100.0 * $valor3; 
    $percentualexc5 = 5.0 / 100.0 * $valor4; 

     
    $percentual6 = 10.0 / 100.0 * $valor5;  //$metafixaMensal;
    

    //Cálculo salário

    $salario6 = $percentual6;

    $salariofinal = $salario_minimo + $percentualsem1 + $percentualsem2 + $percentualsem3 + $percentualsem4 +
                    $percentualexc2 + $percentualexc3 + $percentualexc4 + $percentualexc5 + $percentual6;

    echo "<h2>O salário final do funcionário deve ser de: $salariofinal</h2>";



    

   
    

    
    
       //} 
     //Para o cumprimento de meta semanal: receberá  1% sobre o valor da meta.
     //Para o excedente de meta semanal: Receberá 5% sobre o excedente da meta semanal.
     //Para o excedente de meta mensal: Receberá 10% sobre o excedente de meta mensal.

    ?>
</body>