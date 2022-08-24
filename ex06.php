<?php
require 'models/Db.php';
require 'models/Show.php';
require 'controllers/ex06Ctrl.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6</title>
</head>

<body>
    <?php
    if (is_array($showList)) {
        foreach ($showList as $show) { ?>
            <div>
                <p><?= $show->title ?> par <?= $show->performer ?>, le <?= $show->date ?> à <?= $show->startTime ?>H</p>
            </div>
        <?php }
    } else { ?>
        <p>Une erreur est survenue veuillez contacter le service informatique</p>
    <?php }
    ?>
</body>

</html>