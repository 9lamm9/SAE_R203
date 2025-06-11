<div class="container">
    <h1>Confirmer votre réservation</h1>
    <p><strong>Départ :</strong> <?= htmlspecialchars($trajet['lieuDepart']) ?></p>
    <p><strong>Arrivée :</strong> <?= htmlspecialchars($trajet['lieuArrivee']) ?></p>
    <p><strong>Date :</strong> <?= date('d/m/Y', strtotime($trajet['date'])) ?></p>
    <p><strong>Heure :</strong> <?= substr($trajet['heureDepart'], 0, 5) ?></p>
    <p><strong>Conducteur :</strong> <?= htmlspecialchars($trajet['conducteur_prenom'] . ' ' . $trajet['conducteur_nom']) ?></p>
    <p><strong>Places disponibles :</strong> <?= $trajet['nbr_place'] ?></p>

    <?php if ($trajet['nbr_place'] > 0): ?>
        <form method="post" action="index.php?action=reserver_trajet">
            <input type="hidden" name="trajet_id" value="<?= $trajet['id'] ?>">
            <button type="submit" class="btn-reserver">Confirmer la réservation</button>
            <a href="index.php" class="btn-annuler">Annuler</a>
        </form>
    <?php else: ?>
        <p><strong>Plus de places disponibles pour ce trajet.</strong></p>
        <a href="index.php">Retour à l'accueil</a>
    <?php endif; ?>
</div>