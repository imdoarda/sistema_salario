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

    <!--informa valor meta semanal (20 mil reais)-->
    <label for="name">VALOR DA META SEMANAL:</label>
    <input type="number" name="salario" />

    <!--informa valor meta mensal (80 mil reais)-->
    <label for="name">VALOR DA META MENSAL:</label>
    <input type="number" name="salario1" />

    <!--informa valor feito na semana-->
    <label for="name">QUAL O VALOR FEITO NA SEMANA 1?:</label>
    <input type="number" name="feito" />

    <label for="name">QUAL O VALOR FEITO NA SEMANA 2?:</label>
    <input type="number" name="feito1" />

    <label for="name">QUAL O VALOR FEITO NA SEMANA 3?:</label>
    <input type="number" name="feito2" />

    <label for="name">QUAL O VALOR FEITO NA SEMANA 4?:</label>
    <input type="number" name="feito3" />

    <!--informa valor feito no mês-->
    <label for="name">QUAL O VALOR FEITO NO MÊS?:</label>
    <input type="number" name="month" />

    <!--botão p/adicionar as informações-->
    <button type="submit" name="submit">Calcular</button>
    </form>
    </div>


    <?php 

    //variáveis
    $num = filter_input(INPUT_POST, "salario");
    $num1 = filter_input(INPUT_POST, "salario1");
    $num2 = filter_input(INPUT_POST, "feito");
    $num3 = filter_input(INPUT_POST, "feito1");
    $num4 = filter_input(INPUT_POST, "feito2");
    $num5 = filter_input(INPUT_POST, "feito3");
    $num6 = filter_input(INPUT_POST, "month");
    //$tot = filter_input(INPUT_POST, "feito", "feito1","feito2", "feito3");

   


    //valores fixos
   
    $metafixaSemanal = 20000;
    $metafixaMensal = 80000;
    $salario_minimo = 1927.02;
    
    //Cálculo excedente
    
     $valor1 = intval($num2) - intval($num); //excedente semana 1
     $valor2 = intval($num3) - intval($num); //excedente semana 2
     $valor3 = intval($num4) - intval($num); //excedente semana 3
     $valor4 = intval($num5) - intval($num); //excedente semana 4

     $valor5 = intval($num6) - intval($num1); //excedente mês

    
    //calculo metas concluidas

    $percentual1 = 1.0 / 100.0 * $metafixaSemanal;
    $percentual2 = 5.0 / 100.0 * $valor1; 
    $percentual3 = 5.0 / 100.0 * $valor2; 
    $percentual4 = 5.0 / 100.0 * $valor3; 
    $percentual5 = 5.0 / 100.0 * $valor4; 

    $percentual6 = 10.0 / 100.0 * $valor5;  //$metafixaMensal;
    

    //Cálculo salário

    $salario1 = $percentual1 + $salario_minimo;
    $salario2 = $percentual2 + $salario_minimo;
    $salario3 = $percentual3 + $salario_minimo;
    $salario4 = $percentual4 + $salario_minimo;
    $salario5 = $percentual5 + $salario_minimo;


    $salario6 = $percentual6 + $salario_minimo;
    $salario7 = $percentual1 * 4 + $salario_minimo;

    

   



    if(!($num && $num1 && $num2 && $num3 && $num4 && $num5 && $num6)){
        echo "Por favor, informe os dados pedidos.";
        return;
    }
    if($num2 < 0 || $num3 < 0 || $num4 < 0 || $num5 < 0 || $num6 < 0){
        echo "Por favor, informe com dados positivos.";
        return;
    }


    //condição p/caso de cumprimento de metas
    if($num2 && $num3 && $num4 && $num5 == $num){
        echo "O funcionário alcançou a meta semanal, seu salário deve ser de: $salario1 .";
    }else if($num2 + $num3 + $num4 + $num5 == $metafixaMensal){
        echo "O funcionário alcançou a meta mensal, seu salário deve ser de: $salario7";
    }else if($num6 > $num1){
        echo "O funcionário alcançou a meta mensal com excedente, seu salário deve ser de: ";
    }
    
    //condição p/ caso de obter excedente
    if($num2 > $num){
        echo "O funcionário conseguiu alcançar a meta semanal e conseguiu excedente, seu salário deve ser de: $salario2 .";
    } else if($num3 > $num){
        echo"O funcionário conseguiu alcançar a meta semanal e conseguiu excedente, seu salário deve ser de: $salario3 .";    
    } else if($num4 > $num){
        echo"O funcionário conseguiu alcançar a meta semanal e conseguiu excedente, seu salário deve ser de: $salario4 .";
    } else if($num5 > $num){
        echo"O funcionário conseguiu alcançar a meta semanal e conseguiu excedente, seu salário deve ser de: $salario5 .";
    }
    
    
    if($num2 < $num){
        echo "O funcionário não atingiu a meta semanal na primeira semana e, assim, seu salário deve ser de: $salario_minimo .";
    } else if($num3 < $num){
        echo "O funcionário não atingiu a meta semanal e, assim, seu salário deve ser de: $salario_minimo .";
    } else if($num4 < $num){
        echo "O funcionário não atingiu a meta semanal e, assim, seu salário deve ser de: $salario_minimo .";
    } else if($num5 < $num){
        echo "O funcionário não atingiu a meta semanal e, assim, seu salário deve ser de: $salario_minimo .";
    } 

   
    

    
    
       //} 
     //Para o cumprimento de meta semanal: receberá  1% sobre o valor da meta.
     //Para o excedente de meta semanal: Receberá 5% sobre o excedente da meta semanal.
     //Para o excedente de meta mensal: Receberá 10% sobre o excedente de meta mensal.

    ?>
</body>