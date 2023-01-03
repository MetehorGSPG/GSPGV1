<div id="contenu">
    <h1>
        Création d'un stage
    </h1>
<form method="post" action="index.php?uc=stages&action=enregAjout" >
    <div class="corpsForm">
        <fieldset>
            <p><label>Libelle : </label>
                <input type="text" name="libelle" >
            <p><label>Date de début de stage  : </label>
                <input type="text" name="dateDebut">
            <p><label>Date de fin de stage : </label>
                <input type="text" name="dateFin">
            <p><label>Promotion : </label>
                <input type="text" name="promotion">
            <p><label>Numéro : </label>
                 <input type="text" name="numero">
            <input type='hidden' name = 'id' size = 7 value='<?= $id ?>'>
        </fieldset>
    </div><!--fin classForm-->
   <center> <p><input type="submit" value="Envoyer"></center>
        </form>
</div> <!--fin contenu-->
