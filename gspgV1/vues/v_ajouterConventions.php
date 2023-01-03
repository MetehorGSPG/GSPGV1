<div id="contenu">
    <h1>
        Ajout d'une convention
    </h1>
    <form method="post" action="index.php?uc=conventions&action=enregAjout">
        <div class="corpsForm">
            <fieldset>
                <p><label>stagiaire: <?= $nomStagiaire ?></label>
                    <input type="hidden" name="idStagiaire" value="<?= $id ?>">
                    <br>
                <p><label>Selectionnez l'entreprise: </label>
                    <select name="entreprise" id="entreprise">
                        <?php foreach ($entreprises as $entreprise) {
                        ?>
                            <option value="<?= $entreprise['id'] ?>"><?= $entreprise['nom'] ?></option>
                        <?php } ?>
                    </select>
                <p><label>Selectionnez le formateur: </label>
                    <select name="formateur" id="formateur">
                        <?php foreach ($formateurs as $formateur) {
                        ?>
                            <option value="<?= $formateur['id'] ?>"><?= $formateur['nom'] ?></option>
                        <?php } ?>
                    </select>
            </fieldset>
        </div>
        <!--fin classForm-->
        <center>
            <p><input type="submit" value="Envoyer">
        </center>
    </form>
</div>
<!--fin contenu-->