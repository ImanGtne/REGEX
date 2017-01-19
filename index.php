<?php
$subject = "abcdefghijiklmnopqrstuvwxyz";
//$goodSubjects = ['abstrait', 'abcd', 'baba'];
//$goodSubjects = ['.odt', '.ods', '.odp'];
//$goodSubjects = ['ffodt', 'totototo', '.odp'];
//$goodSubjects = ['Jim', 'Joe'];
//$goodSubjects = ['0000', '4444','123456','12345678'];
//$goodSubjects = ['Jen', 'Yu','Jean-Marie-Richard','Bastien', 'Bénedicte-François'];
//$goodSubjects = ['i','Ii', 'Ioo','Azzzerfvfbo'];
//$goodSubjects = ['00:00','12:12', '13:59','01:12'];
//$goodSubjects = ['12:00am','01:00pm', '11:30am'];
//$goodSubjects = ['0', '1', '1234567543'];
//$goodSubjects = ['0', '+1','34', '-0,055', '+0,04', '0.654', '-1234567543','-1444444555,344'];
$goodSubjects = ['31 01 1999', '01 12 1900','29 06 2099', '30 10 2010'];
//$goodSubjects = ['AB-768-NG' , 'AB-830-NG' ,'AB-030-NG'];
//$badSubjects = ['ba', "fihoubie"];
//$badSubjects = ['.orr', ".deeeeojdp"];
//$badSubjects = ['', ".defffdnsosbfobseeeojdp"];
//$badSubjects = ['Jimi', "Jae"];
//$badSubjects = ['00', "123456789"];
//$badSubjects = ['Y', 'Henz-'];
//$badSubjects = ['Y', 'ret'];
//$badSubjects = ['24:00', '23:60', '23:61', '23:123', '1:12', '30:12', '12:', '12:30am'];
//$badSubjects = ['AI-000-IA', 'II-000-II', 'I0-000-0I', 'U0-100-0U'];
//$badSubjects = ['001', '3,24','3.24' ,'01'];
$badSubjects = ['34 00 1800','00 00 2199','45 13 2360', '55 20 1899'];

$jeux = ["bon" => $goodSubjects, "pas bon" => $badSubjects];

//$regex = "/^ab/";
//$regex = "/^\.od[tps]$/";
//$regex = "/^.{1,9}$/";
//$regex = "/^J(im|oe)$/";
//$regex = "/^\d{4,8}$/";
//$regex = "/^[A-Z][a-zàâäéèêëîïôöûüùÿç]+([ \-][A-Z][a-z]+)*$/";
//$regex = "/^[aeiouy]([a-zA-Z]*[aeiouy])?$/i";
//$regex = "/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/i";
//$regex = "/^[12] \d\d (0[1-9]|1[0-2]) ([1-9]\d|0[1-9]) (\d{3}) (\d{3}) ([1-8]\d|0[1-9]|9[0-7])$/";
//$regex = "/^([A-HJ-NP-TV-Z]{2})-(0\d[1-9]|[1-9]\d\d|0[1-9]0)-([A-HJ-NP-TV-Z]{2})$/";
//$regex = "/^([1-9]\d*|0)$/";
// $regex = "/^([+-]?(([1-9]\d*|0)[.,]\d?\d?[1-9]|[1-9]\d*)|0)$/";
$regex = "/^(0[1-9]|[12]\d|3[01]) (0[1-9]|1[0-2]) (19\d\d|20\d\d)$/";
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
