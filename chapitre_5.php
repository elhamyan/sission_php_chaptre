


<?php
function saluer() {
    echo "Bonjour tout le monde !<br>";
}

function addition($a, $b) {
    return $a + $b;
}

function bienvenue($nom = "visiteur") {
    echo "Bienvenue " . $nom . "<br>";
}

function incrementer() {
    static $compteur = 0;
    $compteur++;
    echo $compteur . "<br>";
}

saluer();
echo "Somme : " . addition(5, 10) . "<br>";
bienvenue();
incrementer();
incrementer();
?>
