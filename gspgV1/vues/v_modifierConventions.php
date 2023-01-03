<div id="contenu">
    <h1>
        Modification d'une convention
    </h1>
    <form method="post" action="index.php?uc=conventions&action=enregModif">
        <div class="corpsForm">
            <fieldset>
                <p><label>Selectionnez l'entreprise: </label>
                    <select name="entreprise" id="entreprise">
                        <?php foreach ($entreprises as $entreprise) {
                            if ($entreprise['id'] == $idEntreprise) {
                        ?>
                            <option value="<?= $entreprise['id'] ?>" selected="true"><?= $entreprise['nom'] ?>
                        </option>
                            <?php
                            } else {
                            ?>

                            <option value="<?= $entreprise['id'] ?>"><?= $entreprise['nom'] ?></option>
                        <?php } }?>
                    </select>

                    <p><label>Selectionnez le formateur: </label>
                    <select name="formateur" id="formateur">
                        <?php foreach ($formateurs as $formateur) {
                            if ($formateur['id'] == $idFormateur) {
                        ?>
                            <option value="<?= $formateur['id'] ?>" selected="true"><?= $formateur['nom'] ?>
                        </option>
                            <?php
                            } else {
                            ?>

                            <option value="<?= $formateur['id'] ?>"><?= $formateur['nom'] ?></option>
                        <?php } }?>
                    </select>
                    <input type='hidden' name='id' size=7 value='<?= $id ?>'>
            </fieldset>
        </div>
        <!--fin classForm-->
        <center>
            <p><input type="submit" value="Envoyer">
        </center>
    </form>
</div>
<!--fin contenu-->