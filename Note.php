<?php
function args($prompt) {
    echo $prompt;
    return rtrim(fgets(STDIN), "\n");
}

function gestionNotes($notes) {
    $total = 0;
    $count = 0;
    while ($count < count($notes)) {
        foreach ($notes as $note) {
            echo "Note: " . $note . "\n";
            $total += $note;
            $count++;
        }
    }
    return $total / count($notes);
}

function main() {
    $nombre_notes = intval(args('Entrez le nombre de notes: '));
    $notes = [];

    for ($i = 0; $i < $nombre_notes; $i++) {
        $notes[] = floatval(args("Entrez la note " . ($i + 1) . ": "));
    }

    $moyenne = gestionNotes($notes);
    echo "La moyenne des notes est: " . $moyenne . "\n";
}

main();
?>
