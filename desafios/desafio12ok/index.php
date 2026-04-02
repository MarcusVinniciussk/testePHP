<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio dos segundos!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $resgSegundos = $_REQUEST['segundos']?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">Quantos segundos?
            <label for="segundos">Quantos segundos deseja transformar</label>
            <input type="number" name="segundos" id="idsegundos" min="0" value="<?= $resgSegundos ?>" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
            <?php 
                if ($resgSegundos > 0) {
                    
                $semanas = intdiv($resgSegundos,604800);
                
                $restoSemana = $resgSegundos % 604800;
                if ($semanas >= 2) {
                    echo "$semanas semanas";
                } if ($semanas == 1 ){
                    echo "$semanas semana";
                } else {
                    echo " ";
                }
                
                $dias = intdiv($restoSemana,86400);
                
                $restoDias =  $restoSemana % 86400;
                
                if ($dias >= 2) {
                    echo "$dias dias";
                } if ($dias == 1 ){
                    echo "$dias dia";
                } else {
                    echo " ";
                }
                
                $horas = intdiv($restoDias,3600);
                
                $restoHoras = $restoDias % 3600;
                
                if ($horas >= 2) {
                    echo "$horas horas";
                } if ($horas == 1 ){
                    echo "$horas hora";
                } else {
                    echo " ";
                }

                $minutos = intdiv($restoHoras,60);

                if ($minutos >= 2) {
                    echo "$minutos minutos";
                } if ($minutos == 1 ){
                    echo "$minutos minuto";
                } else {
                    echo " ";
                }

                $segundos = $restoHoras % 60;

                if ($segundos >= 2) {
                    echo "$segundos segundos";
                } if ($segundos == 1 ){
                    echo "$segundos segundo";
                } else {
                    echo " ";
                }
                } else {
                    echo "Por favor informar um valor maior que 0";
                }
            ?>
    </section>
</body>
</html>