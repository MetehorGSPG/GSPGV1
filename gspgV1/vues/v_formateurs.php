<div id="contenu1">
    <div id="Titresuivistage">
        <h1><b>Liste des formateurs</b></h1>
    </div>

    <div id="Tableau">
        <Table border='4'>
            <tr>
                <th><b>Nom</b></th>
                <th><b>Prenom</b></th>
                <th><b>Mail</b></th>
                <th><b>Tel</b></th>
                <th><b>Modification</b></th>
            </tr>
            <?php
            foreach ($formateurs as $formateur) {
                $id = $formateur['id'];
            ?>
                <tr>
                    <td><?= $formateur['nom'] ?></td>
                    <td><?= $formateur['prenom'] ?></td>
                    <td><?= $formateur['mail'] ?></td>
                    <td><?= $formateur['tel'] ?></td>
                    <td><a href="index.php?uc=formateurs&action=modifierFormateurs&id=<?= $id ?>">Modifier</a></td>
                </tr>
            <?php
            }
            ?>
        </Table>
    </div>
    <a href="index.php?uc=formateurs&action=ajouterFormateurs">Ajouter des formateurs.</a>
    <br>
    </br>


</div>