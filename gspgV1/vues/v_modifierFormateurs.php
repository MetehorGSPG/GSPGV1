<div id="contenu">
    <h1>
        Modification d'un.e format.eur.rice
    </h1>
<form method="post" action="index.php?uc=formateurs&action=enregModif" >
    <div class="corpsForm">
        <fieldset>
            <p><label>Nom : </label>
                <input type="text" name="nom" value="<?= $nom?>">
            <p><label>Prénom : </label>
                <input type="text" name="prenom" value="<?= $prenom?>">
            <p><label>Adresse mail : </label>
                <input type="text" name="mail" value="<?= $mail?>">
            <p><label>Numéro de téléphone : </label>
                <input type="text" name="tel" value="<?= $tel?>">
            <input type='hidden' name = 'id' size = 7 value='<?= $id ?>'>
        </fieldset>
    </div><!--fin classForm-->
   <center> <p><input type="submit" value="Envoyer"></center>
        </form>
</div> <!--fin contenu-->
