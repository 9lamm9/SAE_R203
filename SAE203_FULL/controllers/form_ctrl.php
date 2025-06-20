<?php
function form_submit_ctrl() {
    session_start();
    require('models/conf.php');

    $uid = $_SESSION['uid'];
    $nom_complet = $_POST['nom'];
    $sujet = $_POST['sujet'];
    $adresse = $_POST['adresse'];
    $gps = $_POST['gps'];
    $departement = $_POST['departement'];
    $niveau = $_POST['niveau'];

    $stmt = $pdo->prepare("INSERT INTO users (uid, nom_complet, sujet, adresse, gps, departement, niveau) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$uid, $nom_complet, $sujet, $adresse, $gps, $departement, $niveau]);

    header("Location: index.php");
    exit;
}
