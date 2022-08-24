<?php
require 'models/Db.php';
require 'models/Clients.php';
require 'controllers/ex03Ctrl.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>
    <?php
    if (is_array($clientList)) { ?>
        <table>
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Carte</th>
                    <th>Numéro de carte</th>
                </tr>
            </thead>
            <tbody>
                <?php
                /**
                 * On parcours la liste des clients.
                 */
                foreach ($clientList as $client) { ?>
                    <tr>
                        <td><?= $client->id ?></td>
                        <td><?= $client->lastName ?></td>
                        <td><?= $client->firstName ?></td>
                        <td><?= $client->birthDate ?></td>
                        <td><?= $client->card ?></td>
                        <td><?= $client->cardNumber ?></td>
                    </tr>
                <?php   } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>Une erreur est survenue veuillez contacter le service informatique</p>
    <?php }
    ?>
</body>

</html>