<?php require "includes/_functions.php";//exo page 6
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Introduction PHP - Exo 1</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 1</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Entrainement</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Donnez moi des fruits</a></li>
                    <li><a href="exo3.php" class="main-nav-link">Donnez moi de la thune</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Donnez moi des fonctions</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Netflix</a></li>
                    <li><a href="exo6.php" class="main-nav-link">Mini-site</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Ecrivez la phrase suivante dans une balise HTML P en utilisant les 2 variables
                ci-dessous :</p>
            <p class="exercice-txt">"<i>Firstname</i> a obtenu <i>score</i> points à cette partie."</p>
            <div class="exercice-sandbox">
                <?php
                $firstname = "Michel";
                $score = 327;
                echo "<p>$firstname a obtenu $score  points à cette partie.</p>"
                    ?>
                <p><?= $firstname ?></p>
            </div>
        </section>


        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Afficher dans une liste HTML le nom des produits suivants et leurs prix.</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                    $nameProduct1 = "arc";
                    $priceProduct1 = 10.30;
                    $nameProduct2 = "flèche";
                    $priceProduct2 = 2.90;
                    $nameProduct3 = "potion";
                    $priceProduct3 = 5.20;
                    echo "<li>{$nameProduct1} : {$priceProduct1}</li>"
                        . "<li>{$nameProduct2} : {$priceProduct2}</li>"
                        . "<li>{$nameProduct3} : {$priceProduct3}</li>"
                        ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Calculer le montant total de la commande des produits ci-dessus avec les quantités
                ci-dessous et appliquez lui une remise de 10%.</p>
            <div class="exercice-sandbox">
                <?php
                $quantityProduct1 = 1;
                $quantityProduct2 = 10;
                $quantityProduct3 = 4;

                $totalPrice = 0;

                $totalPrice += $quantityProduct1 * $priceProduct1;
                $totalPrice += $quantityProduct2 * $priceProduct2;
                $totalPrice += $quantityProduct3 * $priceProduct3;
                $discount = 0.9;
                $discountTotal = $totalPrice * $discount;
                ?>
                <p>Le prix total est de <?= number_format($discountTotal, 2) ?></p>
            </div>
        </section>


        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Affichez le prix le plus élevé des 3 produits ci-dessus.</p>
            <div class="exercice-sandbox">
                <?php
                echo number_format(max($priceProduct1, $priceProduct2, $priceProduct3), 2);
                ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <?php

        $text1 = "Le marchand m'a vendu un arc et des flèches.";

        ?>
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Affichez dans une liste HTML le nom des produits de la question 2 qui sont présents
                dans la phrase : "<?= $text1 ?>"</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                    if (str_contains($text1, $nameProduct1))
                        echo "<li>$nameProduct1</li>";
                    if (str_contains($text1, $nameProduct2))
                        echo "<li>$nameProduct2</li>";
                    if (str_contains($text1, $nameProduct3))
                        echo "<li>$nameProduct3</li>";

                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Parmis les scores suivants, affichez le prénom des joueurs qui ont obtenus entre 50
                et 150 points.</p>
            <div class="exercice-sandbox">
                <?php

                $namePlayer1 = "Tim";
                $scorePlayer1 = 67;
                $namePlayer2 = "Morgan";
                $scorePlayer2 = 198;
                $namePlayer3 = "Hamed";
                $scorePlayer3 = 21;
                $namePlayer4 = "Camille";
                $scorePlayer4 = 134;
                $namePlayer5 = "Kevin";
                $scorePlayer5 = 103;

                $minValue = 50;
                $maxValue = 150;

                if ($scorePlayer1 >= $minValue && $scorePlayer1 <= $maxValue) {
                    echo "<li>$namePlayer1</li>";
                }
                if ($scorePlayer2 >= $minValue && $scorePlayer2 <= $maxValue) {
                    echo "<li>$namePlayer2</li>";
                }
                if ($scorePlayer3 >= $minValue && $scorePlayer3 <= $maxValue) {
                    echo "<li>$namePlayer3</li>";
                }
                if ($scorePlayer4 >= $minValue && $scorePlayer4 <= $maxValue) {
                    echo "<li>$namePlayer4</li>";
                }
                if ($scorePlayer5 >= $minValue && $scorePlayer5 <= $maxValue) {
                    echo "<li>$namePlayer5</li>";
                }
                ?>
            </div>
        </section>


        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">En réutilisant les scores de la question précédente, afficher le nom du joueur ayant
                obtenu le plus grand score.</p>
            <div class="exercice-sandbox">
                <?php
                //Methode with scitch case :
                // switch (max($scorePlayer1, $scorePlayer2, $scorePlayer3, $scorePlayer4, $scorePlayer5)) {
                //     case $scorePlayer1:
                //         echo $namePlayer1;
                //         break;
                //     case $scorePlayer2:
                //         echo $namePlayer2;
                //         break;
                //     case $scorePlayer3:
                //         echo $namePlayer3;
                //         break;
                //     case $scorePlayer4:
                //         echo $namePlayer4;
                //         break;
                //     case $scorePlayer5:
                //         echo $namePlayer5;
                //         break;
                // }
                // $maxValueScore = max($scorePlayer1, $scorePlayer2, $scorePlayer3, $scorePlayer4, $scorePlayer5);
                //Methode with if :
                // if ($maxValueScore <= $scorePlayer1) {
                //     echo $namePlayer1;
                // }
                // if ($maxValueScore <= $scorePlayer2) {
                //     echo $namePlayer2;
                // }
                // if ($maxValueScore <= $scorePlayer3) {
                //     echo $namePlayer3;
                // }
                // if ($maxValueScore <= $scorePlayer4) {
                //     echo $namePlayer4;
                // }
                // if ($maxValueScore <= $scorePlayer5) {
                //     echo $namePlayer5;
                // }
                
                if (!isset($scoreMax) || $scorePlayer1 > $scorePlayer2) {
                    $scoreMax = $scorePlayer1;
                    $winner = $namePlayer1;
                }
                if ($scorePlayer2 > $scoreMax) {
                    $scoreMax = $scorePlayer2;
                    $winner = $namePlayer2;
                }
                if ($scorePlayer3 > $scoreMax) {
                    $scoreMax = $scorePlayer3;
                    $winner = $namePlayer3;
                }
                if ($scorePlayer4 > $scoreMax) {
                    $scoreMax = $scorePlayer4;
                    $winner = $namePlayer4;
                }
                if ($scorePlayer5 > $scoreMax) {
                    $scoreMax = $scorePlayer5;
                    $winner = $namePlayer5;
                }
                echo $winner;
                ?>
            </div>
        </section>


        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Affichez le prénom du joueur le plus long en nombre de caractères.</p>
            <div class="exercice-sandbox">
                <?php
                $lengthPlayerName1 = strlen($namePlayer1);
                $lengthPlayerName2 = strlen($namePlayer2);
                $lengthPlayerName3 = strlen($namePlayer3);
                $lengthPlayerName4 = strlen($namePlayer4);
                $lengthPlayerName5 = strlen($namePlayer5);
                $maxValueName = max($lengthPlayerName1, $lengthPlayerName2, $lengthPlayerName3, $lengthPlayerName4, $lengthPlayerName5);

                if ($lengthPlayerName1 === $maxValueName) {
                    echo $namePlayer1;
                }
                if ($lengthPlayerName2 === $maxValueName) {
                    echo $namePlayer2;
                }
                if ($lengthPlayerName3 === $maxValueName) {
                    echo $namePlayer3;
                }
                if ($lengthPlayerName4 === $maxValueName) {
                    echo $namePlayer4;
                }
                if ($lengthPlayerName5 === $maxValueName) {
                    echo $namePlayer5;
                }
                ?>
            </div>
        </section>

        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Créer une variable $players ayant pour valeur un tableau multidimensionnel contenant
                toutes les données des joueurs avec leurs scores ci-dessus et leurs ages ci-dessous.</p>
            <ul class="exercice-txt">
                <li>Tim : 25 ans</li>
                <li>Morgan : 34 ans</li>
                <li>Hamed : 27 ans</li>
                <li>Camille : 47 ans</li>
                <li>Kevin : 31 ans</li>
            </ul>
            <p class="exercice-txt">Afficher la valeur de cette variable avec tous les détails.</p>
            <div class="exercice-sandbox">
                <?php

                $agePlayer1 = 25;
                $agePlayer2 = 34;
                $agePlayer3 = 27;
                $agePlayer4 = 47;
                $agePlayer5 = 31;

                $players = [
                    [
                        "name" => $namePlayer1,
                        "age" => $agePlayer1,
                        "score" => $scorePlayer1
                    ],
                    [
                        "name" => $namePlayer2,
                        "age" => $agePlayer2,
                        "score" => $scorePlayer2
                    ],
                    [
                        "name" => $namePlayer3,
                        "age" => $agePlayer3,
                        "score" => $scorePlayer3
                    ],
                    [
                        "name" => $namePlayer4,
                        "age" => $agePlayer4,
                        "score" => $scorePlayer4
                    ],
                    [
                        "name" => $namePlayer5,
                        "age" => $agePlayer5,
                        "score" => $scorePlayer5
                    ],
                ];
                $players2 = [
                    $namePlayer1 => [
                        "age" => $agePlayer1,
                        "score" => $scorePlayer1
                    ],
                    $namePlayer2 => [
                        "age" => $agePlayer2,
                        "score" => $scorePlayer2
                    ],
                    $namePlayer3 => [
                        "age" => $agePlayer3,
                        "score" => $scorePlayer3
                    ],
                    $namePlayer4 => [
                        "age" => $agePlayer4,
                        "score" => $scorePlayer4
                    ],
                    $namePlayer5 => [
                        "age" => $agePlayer5,
                        "score" => $scorePlayer5
                    ],
                ];

                var_dump($players);
                var_dump($players[2]['score']);
                var_dump($players2['Hamed']['score']);
                ?>
            </div>
        </section>

        <!-- QUESTION 10 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 10</h2>
            <p class="exercice-txt">Afficher le prénom et l'âge du joueur le plus jeune dans une phrase dans une balise
                HTML P.</p>
            <div class="exercice-sandbox">
                <ul>
                    <li>
                        <?php

                        // foreach ($players as $player) {
                        //     var_dump($player['age']);
                        // }
                        foreach ($players as $player) {
                                if(!isset($currentAge) || $player['age'] < $currentAge){
                                    $currentAge = $player['age'];
                                    $currentName = $player['name'];
                                }
                            }
                            echo "le joueur le plaus jeu est :" . $currentName . ", il est agé de :" . $currentAge . " ans.";

                        ?>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>