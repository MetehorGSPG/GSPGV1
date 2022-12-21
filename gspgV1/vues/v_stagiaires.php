<div id="contenu1">
    <div id="Titresuivistage">
        <h1><b>Liste des stagiaires</b></h1>
    </div>

    <div id="Tableau">
        <Table border='4'>
            <tr>
                <th><b>Nom</b></th>
                <th><b>Prenom</b></th>
                <th><b>adresse</b></th>
                <th><b>mail</b></th>
                <th><b>tel</b></th>
                <th><b>promotion</b></th>
                <th><b>option</b></th>
                <th><b>Modification</b></th>
            </tr>
            <?php
            foreach ($stagiaires as $stagiaire) {
                $id = $stagiaire['id'];
            ?>
                <tr>
                    <td><?= $stagiaire['nom'] ?></td>
                    <td><?= $stagiaire['prenom'] ?></td>
                    <td><?= $stagiaire['adresse'] ?></td>
                    <td><?= $stagiaire['mail'] ?></td>
                    <td><?= $stagiaire['tel'] ?></td>
                    <td><?= $stagiaire['promotion'] ?></td>
                    <td><?= $stagiaire['choixOption'] ?></td>
                    <td><a href="index.php?uc=stagiaires&action=modifierStagiaires&id=<?= $id ?>">Modifier</a></td>
                </tr>
            <?php
            }
            ?>
        </Table>
    </div>
    <a href="index.php?uc=stagiaires&action=ajouterStagiaires">Ajouter des stagiaires.</a>
    <br>
    </br>


</div>