<div id="contenu">
    <h1>
        Ajout d'une entreprise
    </h1>
<form method="post" action="index.php?uc=entreprises&action=enregAjout" >
    <div class="corpsForm">
        <fieldset>
            <p><label>Nom de l'entreprise : </label>
                <input type="text" name="nom">
            <p><label>Adresse de l'entreprise : </label>
                <input type="text" name="adresse">
            <p><label>Ville : </label>
                <input type="text" name="ville">
            <p><label>Adresse mail : </label>
                <input type="text" name="mail">
            <p><label>Numéro de télephone : </label>
                 <input type="text" name="tel">
            <p><label>Nom du tuteur de stage : </label>
                 <input type="text" name="nomTutuerStage">
            <p><label>Numéro du tuteur de stage : </label>
                 <input type="text" name="telTuteurStage">
        </fieldset>
    </div><!--fin classForm-->
   <center> <p><input type="submit" value="Envoyer"></center>
        </form>
</div> <!--fin contenu-->