<div id="contenu1">
    <div id="Titresuivistage">
        <h1><b>Liste des conventions</b></h1>
    </div>

    <div id="Tableau">
        <Table border='4'>
            <tr>
                <th><b>Nom du stagiaire</b></th>
                <th><b>Prénom du stagiaire</b></th>
                <th><b>Modification/Création</b></th>
            </tr>
            <?php
            foreach ($existeConventions as $existeConvention) {
                $id = $existeConvention['id'];
            ?>
                <tr>
                    <td><?= $existeConvention['nom'] ?></td>
                    <td><?= $existeConvention['prenom'] ?></td>
                    <td><a href="index.php?uc=conventions&action=modifierConventions&id=<?= $id ?>">Modifier</a></td>
                </tr>
            <?php
            }
            ?>
            <?php
            foreach ($sansConventions as $sansConvention) {
                $id = $sansConvention['id'];
            ?>
                <tr>
                    <td><?= $sansConvention['nom'] ?></td>
                    <td><?= $sansConvention['prenom'] ?></td>
                    <td><a href="index.php?uc=conventions&action=ajouterConventions&id=<?= $id ?>">Créer</a></td>
                </tr>
            <?php
            }
            ?>
        </Table>
   


</div>