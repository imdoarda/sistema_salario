<!DOCTYPE html>
<html>

<head>
    <title>Tipo número</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
      <!--pedir nome vendedor-->
    <h1>Informe os dados pedidos</h1>
    <form method="post">
    <label for="name">NOME:</label>
    <input type="name" name="name" />

    <!--informa valor meta semanal (20 mil reais)-->
    <label for="name">VALOR DA META SEMANAL:</label>
    <input type="number" name="salario" />

    <!--informa valor meta mensal (80 mil reais)-->
    <label for="name">VALOR DA META MENSAL:</label>
    <input type="number" name="salario1" />

    <!--informa valor feito na semana-->
    <label for="name">QUAL O VALOR FEITO NA SEMANA 1?:</label>
    <input type="number" name="feito1" />

    <label for="name">QUAL O VALOR FEITO NA SEMANA 2?:</label>
    <input type="number" name="feito2" />

    <label for="name">QUAL O VALOR FEITO NA SEMANA 3?:</label>
    <input type="number" name="feito3" />

    <label for="name">QUAL O VALOR FEITO NA SEMANA 4?:</label>
    <input type="number" name="feito4" />

    <!--informa valor feito no mês-->
    <label for="name">QUAL O VALOR FEITO NO MÊS?:</label>
    <input type="number" name="month" />

    <button type="submit" name="submit">Calcular</button>
    </form>


    <?php 

    //variáveis
    $num = filter_input(INPUT_POST, "salario");
    $num1 = filter_input(INPUT_POST, "salario1");
    $num2 = filter_input(INPUT_POST, "feito1");
    $num3 = filter_input(INPUT_POST, "feito2");
    $num4 = filter_input(INPUT_POST, "feito3");
    $num5 = filter_input(INPUT_POST, "feito4");
    $num6 = filter_input(INPUT_POST, "month");

    if(!($num2 && $num3 && $num4 && $num5)){
        echo "Por favor, informe os dados pedidos.";
        return;
    }
    if($num2 < 0 || $num3 < 0 || $num4 < 0 || $num5 < 0){
        echo "Por favor, informe com dados positivos.";
        return;
    }



    if ($num2 && $num3 && $num4 && $num5 == $num)
    {
        echo "O funcionário atingiu a meta semanal!";

     } else if ($num2 > $num)
     {

        echo "";

    }else if( $num6 > $num1)
    {
        echo "O funcionário cumpriu a meta mensal!";
   
    }else{
        echo "Devido ao não cumprimento das metas semanais e, assim, das mensais, o salário deve ser de R$ 1.927,02";
    }

     
     //R$ 1.927,02
     //calcular o salário final
     //exibir ao usuário
     //tem salario minimo definido
     //Para o cumprimento de meta semanal: receberá  1% sobre o valor da meta.
     //Para o excedente de meta semanal: Receberá 5% sobre o excedente da meta semanal.
     //Para o excedente de meta mensal: Receberá 10% sobre o excedente de meta mensal.
      //}else if($num2)
    //{
       // echo "";


    ?>
</body>