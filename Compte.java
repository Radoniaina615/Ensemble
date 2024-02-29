import java.util.Scanner;

public class GestionComptes {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        boolean continuer = true;

        while (continuer) {
            System.out.println("Menu:");
            System.out.println("1. Consulter le solde");
            System.out.println("2. Déposer de l'argent");
            System.out.println("3. Retirer de l'argent");
            System.out.println("4. Quitter");

            System.out.print("Choix: ");
            int choix = scanner.nextInt();

            switch (choix) {
                case 1:
                    consulterSolde();
                    break;
                case 2:
                    deposerArgent();
                    break;
                case 3:
                    retirerArgent();
                    break;
                case 4:
                    continuer = false;
                    break;
                default:
                    System.out.println("Choix invalide. Veuillez réessayer.");
            }
        }
    }

    public static void consulterSolde() {
        System.out.println("Le solde est de XXX euros."); // Remplacer XXX par le solde réel
    }

    public static void deposerArgent() {
        // Code pour déposer de l'argent
        System.out.println("Dépôt effectué avec succès.");
    }

    public static void retirerArgent() {
        // Code pour retirer de l'argent
        System.out.println("Retrait effectué avec succès.");
    }
}
