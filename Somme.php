<?php
function maFonction($a, $b) {
    $somme = 0;
    for ($i = 0; $i < $b; $i++) {
        // Condition if-else
        if ($i % 2 == 0) {
            $somme += $a;
        } else {
            $somme -= $a;
        }
    }
    return $somme;
}

// Appel de la fonction avec des arguments
$resultat = maFonction(5, 10);
echo "Le résultat est : " . $resultat;
?>
