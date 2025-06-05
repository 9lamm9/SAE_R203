<?php
require_once(__DIR__ . '/../config/conf.php');
require_once(__DIR__ . '/../models/trajet_model.php');

$trajets = getTrajetsDuJour($connexion);

require_once(__DIR__ . '/../views/trajet_view.php');
