<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<p><a href="../index.html">Inicio</a></p>
    <header>
        <h1>Clique no botão abaixo: </h1>
    </header>
    <main>
        <?php 
            $n = $_POST["nomeambiente"];
            $inf = $_POST["idnodefonte"];
            $ind = $_POST["idnodedestino"];
            $ipm = $_POST["ipmigrado"];
            $token = $_POST["token"];
            $link = "https://app.jelastic.saveincloud.net/1.0/environment/binder/rest/moveextips?envName=$n&session=$token&sourceNodeId=$inf&targetNodeId=$ind&ips=$ipm";
        ?>
        <a href="<?php echo $link; ?>" target="_blank">
            <button type="button">MIGRAR IP (Moveextips) </button>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    </main>
</body>
</html>