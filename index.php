<?php

require_once './hands/Computer.php';

require_once './hands/ElementInterface.php';
require_once './hands/AbstractElement.php';
require_once './hands/Paper.php';
require_once './hands/Rock.php';
require_once './hands/Scissors.php';
require_once './hands/Spock.php';
require_once './hands/Lizard.php';

require_once './Results/Result.php';
require_once './Results/LoseResult.php';
require_once './Results/WinResult.php';
require_once './Results/TieResult.php';


$computer = new Computer();
$paper = new Paper();
$rock = new Rock();
$scissors = new Scissors();
$spock = new Spock();
$lizard = new Lizard();

$pc = new Computer();
$pcSet = ucfirst($pc->pcMove());
$pcSet = new $pcSet;


?>

<html lang="en">

<head>
    <title>RPSLS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="back">

<h1>Lets play a game of Rock Paper Scissors Lizard Spock</h1>
<div class="zone">

    <?php if (array_key_exists('choice', $_POST)) : ?>

        <img class="player" src="/img/<?= $_POST["choice"] ?>.jpg" alt="">

        <?php

        $player1 = $_POST["choice"];
        $player1 = new $player1;
        $result = $player1->beats($pcSet);


        ?> <img class="sign" src="/img/<?= $result->getMessage() ?>.jpg" alt="">


        <img class="pc" src="/img/<?= $computer->pcMove() ?>.jpg" alt="">

        <!--</div>-->
    <?php endif; ?>

</div>

<form action="/" method="post">
    <button class="clicker rock" type="submit" name="choice" value="rock">ROCK</button>
    <button class="clicker paper" type="submit" name="choice" value="paper">PAPER</button>
    <button class="clicker scissors" type="submit" name="choice" value="scissors">SCISSORS</button>
    <button class="clicker lizard" type="submit" name="choice" value="lizard">LIZARD</button>
    <button class="clicker spock" type="submit" name="choice" value="spock">SPOCK</button>
</form>
</body>
</html>
