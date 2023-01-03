<div id="contenu">
    <h1>
        Ajout d'un.e stagiaire
    </h1>
<form method="post" action="index.php?uc=stagiaires&action=enregAjout" >
    <div class="corpsForm">
        <fieldset>
            <p><label>Nom : </label>
                <input type="text" name="nom">
            <p><label>Prénom  : </label>
                <input type="text" name="prenom">
            <p><label>Adresse : </label>
                <input type="text" name="adresse">
            <p><label>Adresse mail : </label>
                <input type="email" name="mail">
            <p></p><label>Numéro de Téléphone : </label>
        <input type="text" name="tel">
            <p><label>Veuillez renseigner la promotion : </label>
                 <input type="text" name="promotion">
            <p><label>Veuillez renseigner l'option : </label>
                 <input type="text" name="choixOption">
        </fieldset>
    </div><!--fin classForm-->
   <center> <p><input type="submit" value="Envoyer"></center>
        </form>
</div> <!--fin contenu-->