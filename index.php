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
    
    <input type="submit" name="submit" value="Calcular" />
    </form>
    <?php 

     


     //calcular o salário final

     //exibir ao usuário
     //tem salario minimo definido
     //Para o cumprimento de meta semanal: receberá  1% sobre o valor da meta.
     //Para o excedente de meta semanal: Receberá 5% sobre o excedente da meta semanal.
     //Para o excedente de meta mensal: Receberá 10% sobre o excedente de meta mensal.


    ?>
</body>