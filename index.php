<?php
$subject = "abcdefghijiklmnopqrstuvwxyz";
$goodSubjects = ['abstrait', 'abcd', 'baba'];
$badSubjects = ['ba', "fihoubie"];

$jeux = ["bon" => $goodSubjects, "pas bon" => $badSubjects];

$regex = "/^ab/";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Regex : <?= $regex; ?></h1>
<span>Taille : <?= strlen($regex); ?> caractères</span>
<div>
    <h2>Bons cas :</h2>
    <?php
    /*foreach ($jeux as $jeu) {
        foreach ($jeu as $data) {
            echo preg_match($regex, $data) ? "ok<br>" : "pas ok<br>";
        }
    }
    */
    ?>
        <table>
            <tr>
                <th>Chaîne de caractères</th>
                <th>Résultat</th></tr>

   <?php foreach ($goodSubjects as $goodSubject) : ?>
            <tr>
                <td><?= $goodSubject; ?></td>
                <td><?= preg_match($regex, $goodSubject) ?  "ok" : "pas ok"; ?></td>
            </tr>
    <?php endforeach; ?>

        </table>
    <h2>Mauvais cas</h2>
    <div>
        <table>
            <tr>
                <th>Chaîne de caractères</th>
                <th>Résultat</th></tr>

            <?php foreach ($badSubjects as $badSubject) : ?>
                <tr>
                    <td><?= $badSubject; ?></td>
                    <td><?= preg_match($regex, $badSubject) ?  "ok" : "pas ok"; ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>
</body>
</html>
