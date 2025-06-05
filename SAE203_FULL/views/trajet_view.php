<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Trajets du jour</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Trajets disponibles aujourd’hui</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Heure départ</th>
                <th>Heure arrivée</th>
                <th>Conducteur</th>
                <th>Lieu de départ</th>
                <th>Points intermédiaires</th>
                <th>Places restantes</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($trajets as $trajet): ?>
            <tr>
                <td><?= htmlspecialchars($trajet['heure_depart']) ?></td>
                <td><?= htmlspecialchars($trajet['heure_arrivee']) ?></td>
                <td><?= htmlspecialchars($trajet['prenom_conducteur'] . ' ' . $trajet['nom_conducteur']) ?></td>
                <td><?= htmlspecialchars($trajet['lieu_depart']) ?></td>
                <td><?= htmlspecialchars($trajet['points_intermediaires']) ?></td>
                <td><?= htmlspecialchars($trajet['places_disponibles']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
