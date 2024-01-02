<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Atualize o status:</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["app"];
            $s = $_GET["session"];
            $link = "https://app.jelastic.saveincloud.net/JElastic/administration/cluster/rest/setenvstatus?appid=cluster&targetAppid=$n&status=2&session=$s";            
        ?>
        <a href="<?php echo $link; ?>" target="_blank">
            <button type="button">LIGAR</button>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>