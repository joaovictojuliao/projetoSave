<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem e-mail</title>
    <link rel="stylesheet" href="../e-mail.css">
</head>
<body>
<p><a href="../index.html">Inicio</a></p>
    <header>
        <h1>Copie o texto abaixo: </h1>
    </header>
    <main>
        <?php 
            $nome = $_POST["nomecliente"]; 
            $ip1 = "200.150.202.194";
            $ip2 = "200.150.200.228";
            $dominio = $_POST["dominio"]; 
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            $plano = $_POST["plano"]; 
            $end1 = "http://server2.pureteserver.com:2082";
            $end2 = "https://server2.pureteserver.com:2083";
            $dns1 = "ns.server2.pureteserver.com";
            $dns2 = "ns2.server2.pureteserver.com";
            $host = "server2.pureteserver.com";
        ?>
            <title>Informações de Acesso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .highlight {
            font-weight: bold;
        }
    </style>
</head>
<body>

<p>Bom dia <span class="highlight"><?php echo $nome; ?></span>,</p>

<p>Segue abaixo as informações de acesso do seu plano: <span class="highlight"><?php echo $plano; ?></span> </p>

<p>Endereço IP: <span class="highlight"><?php echo $ip1; ?></span></p>

<p>Acesso ao Painel de Controle:</p>
<ul>
    <li>Domínio: <span class="highlight"><?php echo $dominio; ?></span></li>
    <li>Usuário: <span class="highlight"><?php echo $usuario; ?></span></li>
    <li>Senha: <span class="highlight"><?php echo $senha; ?></span></li>
</ul>

<p>Endereço do Painel de Controle:</p>
<ul>
    <li><span class="highlight"><?php echo $end1; ?></span></li>
    <li><span class="highlight"><?php echo $end2; ?></span></li>
</ul>

<p>NameServers (DNSs):</p>
<ul>
    <li><span class="highlight"><?php echo $dns1; ?></span> (IP: <span class="highlight"><?php echo $ip1; ?></span>)</li>
    <li><span class="highlight"><?php echo $dns2; ?></span> (IP: <span class="highlight"><?php echo $ip2; ?></span>)</li>
</ul>

<p>Acesso ao FTP</p>
<ul>
    <li>Host: <span class="highlight"><?php echo $host; ?></span> ou ftp.<span class="highlight"><?php echo $dominio; ?></span></li>
    <li>Usuário: <span class="highlight"><?php echo $usuario; ?></span></li>
    <li>Senha: <span class="highlight"><?php echo $senha; ?></span></li>
</ul>

<p>Qualquer dúvida estamos à disposição.</p>

<p>Atenciosamente,</p>

</body>
</html>