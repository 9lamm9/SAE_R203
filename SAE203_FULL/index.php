<?php
session_start();

$route = $_GET['route'] ?? null;

switch ($route) {
    case null:
    case 'login':
        require 'views/login_view.php';
        login_view();
        break;

    case 'auth':
        require 'controllers/auth_ctrl.php';
        login_ctrl();
        break;

    case 'formulaire':
        require 'views/formulaire.php';
        formulaire_view();
        break;

    case 'submit_form':
        require 'controllers/form_ctrl.php';
        form_submit_ctrl();
        break;

   
    case 'reserver_trajet':
        require 'controllers/reservation_controle.php';
        $id_trajet = $_POST['trajet_id'] ?? null;
        $id_passager = $_SESSION['user_id'] ?? null;

        if ($id_trajet && $id_passager) {
            ctrl_reserver_trajet();
        } else {
            echo "Paramètres invalides pour la réservation.";
        }
        break;

    case 'confirmation_succes':
        require 'views/confirmation_reservation.php';
        break;

    default:
        require 'views/404_view.php';
        break;
}
