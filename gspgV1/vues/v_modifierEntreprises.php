<div id="contenu">
    <h1>
        Modification d'une entreprise
    </h1>
<form method="post" action="index.php?uc=entreprises&action=enregModif" >
    <div class="corpsForm">
        <fieldset>
            <p><label>Nom : </label>
                <input type="text" name="nom" value="<?= $nom?>">
            <p><label>Adresse : </label>
                <input type="text" name="adresse" value="<?= $adresse?>">
            <p><label>ville : </label>
                <input type="text" name="ville" value="<?= $ville?>">
            <p><label>Adresse Mail : </label>
                <input type="text" name="mail" value="<?= $mail?>">
            <p><label>Numéro de Téléphone : </label>
                 <input type="text" name="tel" value="<?= $tel?>">
            <p><label>Nom du tuteur de stage : </label>
                <input type="text" name="nomTuteurStage" value="<?= $nomTuteurStage?>">
            <p><label>Télephone du tuteur de stage : </label>
            <input type="text" name="telTuteurStage" value="<?= $telTuteurStage?>">
            <input type='hidden' name = 'id' size = 7 value='<?= $id ?>'>
        </fieldset>
    </div><!--fin classForm-->
    <p><input type="submit" value="Envoyer">
</form>
</div> <!--fin contenu-->