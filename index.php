<?php

function pause()
{
    echo "\nAppuyez sur Entrée pour continuer...";
    fgets(STDIN);
}

function menu_generale()
{
    while (true) {
        system('clear');

        echo "==================================\n";
        echo "        GESTION GENERALE           \n";
        echo "==================================\n";
        echo "1. Gestion des clubs\n";
        echo "2. Gestion des équipes\n";
        echo "3. Gestion des joueurs\n";
        echo "4. Gestion des sponsors\n";
        echo "5. Gestion des matchs\n";
        echo "6. Gestion des tournois\n";
        echo "0. Quitter\n";
        echo "----------------------------------\n";
        echo "Choix: ";

        $choix = trim(fgets(STDIN));

        switch ($choix) {
            case '1':
                menu_club();
                break;
            case '2':
                menu_equipe();
                break;
            case '3':
                menu_joueur();
                break;
            case '4':
                menu_sponsor();
                break;
            case '5':
                menu_match();
                break;
            case '6':
                menu_tournoi();
                break;
            case '0':
                echo "Au revoir\n";
                exit;
            default:
                echo "Choix invalide\n";
                pause();
        }
    }
}


function menu_club()
{
    while (true) {
        system('clear');
        echo "====== GESTION DES CLUBS ======\n";
        echo "1. Ajouter un club\n";
        echo "2. Modifier un club\n";
        echo "3. Supprimer un club\n";
        echo "4. Afficher les clubs\n";
        echo "0. Retour\n";
        echo "Choix: ";

        $choix = trim(fgets(STDIN));

        if ($choix == '0') break;

        echo "Fonction club [$choix] en cours...\n";
        pause();
    }
}


function menu_equipe()
{
    while (true) {
        system('clear');
        echo "====== GESTION DES EQUIPES ======\n";
        echo "1. Ajouter une équipe\n";
        echo "2. Modifier une équipe\n";
        echo "3. Supprimer une équipe\n";
        echo "4. Afficher les équipes\n";
        echo "0. Retour\n";
        echo "Choix: ";

        $choix = trim(fgets(STDIN));
        if ($choix == '0') break;

        echo "Fonction équipe [$choix] en cours...\n";
        pause();
    }
}


function menu_joueur()
{
    while (true) {
        system('clear');
        echo "====== GESTION DES JOUEURS ======\n";
        echo "1. Ajouter un joueur\n";
        echo "2. Modifier un joueur\n";
        echo "3. Supprimer un joueur\n";
        echo "4. Afficher les joueurs\n";
        echo "0. Retour\n";
        echo "Choix: ";

        $choix = trim(fgets(STDIN));
        if ($choix == '0') break;

        echo "Fonction joueur [$choix] en cours...\n";
        pause();
    }
}


function menu_sponsor()
{
    while (true) {
        system('clear');
        echo "====== GESTION DES SPONSORS ======\n";
        echo "1. Ajouter un sponsor\n";
        echo "2. Modifier un sponsor\n";
        echo "3. Supprimer un sponsor\n";
        echo "4. Afficher les sponsors\n";
        echo "0. Retour\n";
        echo "Choix: ";

        $choix = trim(fgets(STDIN));
        if ($choix == '0') break;

        echo "Fonction sponsor [$choix] en cours...\n";
        pause();
    }
}


function menu_match()
{
    while (true) {
        system('clear');
        echo "====== GESTION DES MATCHS ======\n";
        echo "1. Ajouter un match\n";
        echo "2. Modifier un match\n";
        echo "3. Supprimer un match\n";
        echo "4. Afficher les matchs\n";
        echo "0. Retour\n";
        echo "Choix: ";

        $choix = trim(fgets(STDIN));
        if ($choix == '0') break;

        echo "Fonction match [$choix] en cours...\n";
        pause();
    }
}


function menu_tournoi()
{
    while (true) {
        system('clear');
        echo "====== GESTION DES TOURNOIS ======\n";
        echo "1. Ajouter un tournoi\n";
        echo "2. Modifier un tournoi\n";
        echo "3. Supprimer un tournoi\n";
        echo "4. Afficher les tournois\n";
        echo "0. Retour\n";
        echo "Choix: ";

        $choix = trim(fgets(STDIN));
        if ($choix == '0') break;

        echo "Fonction tournoi [$choix] en cours...\n";
        pause();
    }
}


menu_generale();
