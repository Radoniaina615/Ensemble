def gerer_ordonnances(*patients):
    ordonnances_traitees = 0
    while ordonnances_traitees < len(patients):
        for patient in patients:
            if patient["ordonnance"]:
                traiter_ordonnance(patient["nom"], patient["ordonnance"])
                ordonnances_traitees += 1

def traiter_ordonnance(nom_patient, ordonnance):
    print(f"Traitement de l'ordonnance pour {nom_patient}: {ordonnance}")

# Exemple d'utilisation
patient1 = {"nom": "Alice", "ordonnance": ["Paracétamol", "Vitamine C"]}
patient2 = {"nom": "Bob", "ordonnance": ["Ibuprofène", "Antibiotiques"]}
patient3 = {"nom": "ken", "ordonnance": ["Calcium cac1000", "magne b6"]}

gerer_ordonnances(patient1, patient2, patient3)
