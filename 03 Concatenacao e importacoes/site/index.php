<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My PHP Site</title>
    </head>
    <body>
        <?php
            // Inclui um arquivo
            // include ('includes/header.php')
            // O require exige que um arquivo seja incluído. Qualquer erro que houver com relação a esse arquivo header, irá impedir a execução do código abaixo da inclusão. O include não.
            require ('includes/header.php')
        ?>
        <section>
            <p><?php print ("Olá, sou conteúdo do site feito em php") ?></p>
            <!-- É possível executar um código php de forma mais enxuta dessa forma: -->
            <p><?= ("Conteúdo da página") ?></p>
        </section>
        <?php
            // Include once garante que o arquivo seja incluído apenas uma vez. A mesma função é dada para o require
            include_once ('includes/footer.php')
        ?>
    </body>
</html>
