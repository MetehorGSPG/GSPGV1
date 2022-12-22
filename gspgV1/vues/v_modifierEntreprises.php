<div id="titre">
    <h1>
        <center>Modification d'une entreprise</center>
    </h1>
</div>

<form method="post" action="index.php?uc=entreprises&action=enregModif">
  
    <div id="demande1">

        <label>Nom : </label>
        <input type="text" name="nom" value="<?= $nom?>">

    </div>

    <div id="demande1">

        <label>Adresse : </label>
        <input type="text" name="adresse" value="<?= $adresse?>">

    </div>

    <div id="demande1">

        <label>ville : </label>
        <input type="text" name="ville" value="<?= $ville?>">

    </div>

    <div id="demande1">

        <label>Adresse Mail : </label>
        <input type="text" name="mail" value="<?= $mail?>">

    </div>
    <div id="demande1">

        <label>Numéro de Téléphone : </label>
        <input type="text" name="tel" value="<?= $tel?>">

    </div>

    <div id="demande1">
        <label>Veuillez renseigner le nom du tuteur de stage : </label>
        <input type="text" name="nomTuteurStage" value="<?= $nomTuteurStage?>">
    </div>

    <div id="demande1">
        <label>Veuillez renseigner le numéro de télephone du tuteur de stage : </label>
        <input type="text" name="telTuteurStage" value="<?= $telTuteurStage?>">
    </div>

    <input type='hidden' name = 'id' size = 7 value='<?= $id ?>'>
    
    <div id="bouttonenvoie">
        <input type="submit" value="Envoyer">
    </div>

</form>