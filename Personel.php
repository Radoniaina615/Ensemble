<?php
// Définition de la fonction de gestion du personnel
function gestionPersonnel(...$personnes) {
    foreach ($personnes as $personne) {
        $message = "Nom: {$personne['nom']}, Age: {$personne['age']}, Poste: {$personne['poste']}";
        echo $message . "\n";
    }
}

// Fonction simulant la saisie utilisateur
function args($prompt) {
    echo $prompt;
    return rtrim(fgets(STDIN), "\n");
}

// Exemple d'utilisation de la fonction avec la condition ternaire et la fonction d'args
function main() {
    $personne1 = [
        'nom' => args('Entrez le nom de la personne 1: '),
        'age' => intval(args('Entrez l\'âge de la personne 1: ')),
        'poste' => args('Entrez le poste de la personne 1: ')
    ];

    $personne2 = [
        'nom' => args('Entrez le nom de la personne 2: '),
        'age' => intval(args('Entrez l\'âge de la personne 2: ')),
        'poste' => args('Entrez le poste de la personne 2: ')
    ];

    $personne3 = [
        'nom' => args('Entrez le nom de la personne 3: '),
        'age' => intval(args('Entrez l\'âge de la personne 3: ')),
        'poste' => args('Entrez le poste de la personne 3: ')
    ];

    gestionPersonnel($personne1, $personne2, $personne3);
}

// Appel de la fonction principale
main();
?>
