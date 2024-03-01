# Définition de la fonction de gestion des comptes
def gestionComptes(comptes):
    total_solde = 0
    i = 0
    while i < len(comptes):
        for compte_id in comptes:
            solde = comptes[compte_id]
            total_solde += solde
            print(f"Compte {compte_id}: Solde = {solde}")
            i += 1
    return total_solde

# Exemple d'utilisation de la fonction avec la boucle for in et la fonction de retour
def main():
    comptes = {
        "A123": 1000,
        "B456": 2000,
        "C789": 1500
    }

    solde_total = gestionComptes(comptes)
    print(f"Solde total de tous les comptes: {solde_total}")

# Appel de la fonction principale
main()
