<?php
function typeEffect($text, $speed = 50) {
    for ($i = 0; $i < strlen($text); $i++) {
        echo $text[$i];
        usleep($speed * 1000); // control speed (milliseconds)
    }
    echo "\n";
}

while (true) {
    system('clear'); // pour Linux/Mac, utilisez 'cls' pour Windows
    typeEffect("==================================");
    typeEffect("         GESTION CLUBS");
    typeEffect("==================================");
    typeEffect("1. Ajouter un club");
    typeEffect("2. Modifier un club");
    typeEffect("3. Supprimer un club");
    typeEffect("4. Afficher un club");
    typeEffect("0. Quitter");

    echo "Choix: ";
    $choix = trim(fgets(STDIN));

    switch ($choix) {
        case '1':
            typeEffect("Ajouter un club...");
            break;
        case '2':
            typeEffect("Modifier un club...");
            break;
        case '3':
            typeEffect("Supprimer un club...");
            break;
        case '4':
            typeEffect("Afficher un club...");
            break;
        case '0':
            typeEffect("Au revoir !");
            exit;
        default:
            typeEffect("Choix invalide !");
            break;
    }

    typeEffect("\nAppuyez sur Entrée pour revenir au menu...");
    fgets(STDIN);
}
