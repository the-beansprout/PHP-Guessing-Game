<?php
session_start();

$randnum = $_SESSION['randnum'];
$userGuess=$_POST["userGuess"];

if (isset($randnum)) {
    if ($userGuess<$randnum) {
            echo "<center>You guessed too low!<a href = game.php></a></center>";
            $_SESSION['randnum']++;
        }
    if ($userGuess>$randnum) {
            echo "<center>You guessed too high!<a href = game.php></a></center>";
            $_SESSION['randnum']++;
        }
    if ($userGuess==$randnum) {
            echo "<center>Congratulations You're right!!!<a href = game.php></a></center>";
            unset($_SESSION["randnum"], $_SESSION['guesses']);
    }
}
else {
    echo "Uh oh";
}

?>