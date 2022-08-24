<?php
require 'models/Db.php';
require 'models/Clients.php';
require 'controllers/ex05Ctrl.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5</title>
</head>

<body>
    <?php
    if (is_array($clientList)) {
        foreach ($clientList as $client) { ?>
            <div>
                <p><strong>Nom : </strong> <?= $client->lastName ?></p>
                <p><strong>Prénom : </strong> <?= $client->firstName ?></p>
            </div>
        <?php }
    } else { ?>
        <p>Une erreur est survenue veuillez contacter le service informatique</p>
    <?php }
    ?>
</body>

</html>