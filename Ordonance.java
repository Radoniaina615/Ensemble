import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;

public class GestionOrdonnances {
    
    // Définition de la fonction de gestion des ordonnances
    public static double gestionOrdonnances(Map<String, Double> ordonnances) {
        double totalPrix = 0;
        for (String medicament : ordonnances.keySet()) {
            double prix = ordonnances.get(medicament);
            System.out.println("Médicament: " + medicament + ", Prix: " + prix);
            totalPrix += prix;
        }
        return totalPrix;
    }

    // Fonction principale
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Exemple de liste d'ordonnances
        Map<String, Double> ordonnances = new HashMap<>();
        ordonnances.put("Paracétamol", 5.99);
        ordonnances.put("Amoxicilline", 12.50);
        ordonnances.put("Aspirine", 3.75);

        // Appel de la fonction de gestion des ordonnances
        double totalPrix = gestionOrdonnances(ordonnances);
        System.out.println("Prix total des médicaments: " + totalPrix);
    }
}
