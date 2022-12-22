<div id="contenu1">
    <div id="Titresuivistage">
        <h1><b>Liste des entreprises</b></h1>
    </div>

    <div id="Tableau">
        <Table border='4'>
            <tr>
                <th><b>Nom</b></th>
                <th><b>Adresse</b></th>
                <th><b>Ville</b></th>
                <th><b>Mail</b></th>
                <th><b>Tel</b></th>
                <th><b>Nom du tuteur</b></th>
                <th><b>Tel du tuteur</b></th>
                <th><b>Modification</b></th>
            </tr>
            <?php
            foreach ($entreprises as $entreprise) {
                $id = $entreprise['id'];
            ?>
                <tr>
                    <td><?= $entreprise['nom'] ?></td>
                    <td><?= $entreprise['adresse'] ?></td>
                    <td><?= $entreprise['ville'] ?></td>
                    <td><?= $entreprise['mail'] ?></td>
                    <td><?= $entreprise['tel'] ?></td>
                    <td><?= $entreprise['nomTuteurStage'] ?></td>
                    <td><?= $entreprise['telTuteurStage'] ?></td>
                    <td><a href="index.php?uc=entreprises&action=modifierEntreprises&id=<?= $id ?>">Modifier</a></td>
                </tr>
            <?php
            }
            ?>
        </Table>
    </div>
    <a href="index.php?uc=entreprises&action=ajouterEntreprises">Ajouter des entreprises.</a>
    <br>
    </br>


</div>