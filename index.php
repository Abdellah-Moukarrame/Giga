<?php

function menu_club (){
    while (true) {
    system('clear'); 
    ("==================================");
    ("           GESTION CLUBS          ");
    ("==================================");
    ("1. Ajouter un club");
    ("2. Modifier un club");
    ("3. Supprimer un club");
    ("4. Afficher un club");
    echo("0. Quitter");

    echo "Choix: ";
    $choix = trim(fgets(STDIN));

    switch ($choix) {
        case '1':
            echo("Ajouter un club...");
            break;
        case '2':
            echo("Modifier un club...");
            break;
        case '3':
            echo("Supprimer un club...");
            break;
        case '4':
            echo("Afficher un club...");
            break;
        case '0':
            echo("Au revoir !");
            exit;
        default:
            echo("Choix invalide !");
            break;
    }

    echo("\nAppuyez sur Entrée pour revenir au menu...");
    fgets(STDIN);
}
}

