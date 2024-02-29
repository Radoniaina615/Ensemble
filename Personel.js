 // Définition de la fonction de gestion du personnel
function gestionPersonnel(...personnes) {
    for (let i = 0; i < personnes.length; i++) {
        const personne = personnes[i];
        const message = `Nom: ${personne.nom}, Age: ${personne.age}, Poste: ${personne.poste}`;
        console.log(message);
    }
}

// Exemple d'utilisation de la fonction avec la condition ternaire et la fonction d'args
function main() {
    const personne1 = {
        nom: args('Entrez le nom de la personne 1: '),
        age: parseInt(args('Entrez l\'âge de la personne 1: ')),
        poste: args('Entrez le poste de la personne 1: ')
    };

    const personne2 = {
        nom: args('Entrez le nom de la personne 2: '),
        age: parseInt(args('Entrez l\'âge de la personne 2: ')),
        poste: args('Entrez le poste de la personne 2: ')
    };

    const personne3 = {
        nom: args('Entrez le nom de la personne 3: '),
        age: parseInt(args('Entrez l\'âge de la personne 3: ')),
        poste: args('Entrez le poste de la personne 3: ')
    };

    gestionPersonnel(personne1, personne2, personne3);
}

// Appel de la fonction principale
main();
 
