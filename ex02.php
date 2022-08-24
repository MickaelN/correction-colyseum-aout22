<?php
require 'models/Db.php';
require 'models/ShowTypes.php';
require 'controllers/ex02Ctrl.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>
    <?php
    if (is_array($showTypeList)) { ?>
        <select name="showType">
            <option disabled selected value="">Veuillez choisir un type de spectacle</option>
            <?php
            foreach ($showTypeList as $showType) { ?>
                <option value="<?= $showType->id ?>"><?= $showType->type ?></option>
            <?php   }
            ?>
        </select>
    <?php } ?>
</body>

</html>