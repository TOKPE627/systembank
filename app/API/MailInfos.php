<?php


namespace App\API;


class MailInfos
{

    //MAIL

    CONST SENDGRID_KNOWN_USER                 = 'voltairekossi96@gmail.com';

    CONST SUBJECT_RESPONSE_VISITOR            = 'Réponse de votre message sur SENLOGEMENT';

    CONST SUBJECT_ADDED_TO_PLATFORM           = 'Invitation de connexion sur SENLOGEMENT';

    CONST SUBJECT_INFOS_TO_ENTREPENEURS       = 'Informations de SENLOGEMENT';

    CONST SUBJECT_ASSIGNED                    = "Informations d'assignation de SENLOGEMENT";

    CONST SUBJECT_STATE_VALIDATED             = "Validations de SENLOGEMENT";

    CONST SUBJECT_STATE_PAYED                 = "Paiement reconnu de SENLOGEMENT";

    CONST SUBJECT_NEW_STEED_REGISTERED        = "Un nouvel annonceur enregistré de SENLOGEMENT";

    CONST SUBJECT_WELCOME_IN_OUR_APPLICATION  = "Bienvenue de SENLOGEMENT";

    CONST SUBJECT_NEW_RESERVATION_CUSTOMER    = "Succès de votre réservation de SENLOGEMENT";

    CONST SUBJECT_NEW_RESERVATION             = "Nouvelle réservation de SENLOGEMENT";

    CONST SUBJECT_REPORT_RESERVATION          = "Rapport de réservation de SENLOGEMENT";

    CONST SUBJECT_RELAUNCH                     = "Relance de réservations de SENLOGEMENT";

    CONST SUBJECT_DELETE_USER                 = "Utilisateur Supprimé de SENLOGEMENT";

    CONST SUBJECT_RESET_PASSWORD              = "Réinitialisation de mot de passe de SENLOGEMENT";


    //PARAMS
    CONST PARAM_HOUSE      = "house";
    CONST PARAM_BUILDING   = "building";
    CONST PARAM_FLOOR      = "floor";
    CONST PARAM_APARTMENT  = "apartment";
    CONST PARAM_STUDIO     = "studio";
    CONST PARAM_ROOM       = "room";
}
