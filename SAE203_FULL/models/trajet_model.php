<?php
function getTrajetsDuJour($connexion) {
    $sql = "SELECT 
                t.id,
                t.lieuDepart,
                t.points_intermediaires,
                t.heureDepart,
                t.heureArrivee,
                t.nbr_place,
                e.nom AS nom_conducteur,
                e.prenom AS prenom_conducteur
            FROM trajet t
            JOIN etudiant e ON t.id_conducteur = e.id
            WHERE t.dateDepart = CURDATE()
            ORDER BY t.heureDepart";

    $stmt = $connexion->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
