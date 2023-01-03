<div id="contenu">
    <h1>
        Modification d'un.e stagiaire
    </h1>
<form method="post" action="index.php?uc=stagiaires&action=enregModif" >
    <div class="corpsForm">
        <fieldset>
            <p><label>Nom : </label>
                <input type="text" name="nom" value='<?= $nom?>'>
            <p><label>Prénom  : </label>
                <input type="text" name="prenom" value='<?= $prenom?>'>
            <p><label>Adresse : </label>
                <input type="text" name="adresse" value='<?= $adresse?>'>
            <p><label>Adresse mail : </label>
                <input type="email" name="mail" value='<?= $mail?>'>
                <p><label> Numéro de téléphone : </label>
                <input type="text" name="tel" value='<?= $tel?>'>
            <p><label>Veuillez renseigner la promotion : </label>
                 <input type="text" name="promotion" value='<?= $promotion?>'>
            <p><label>Veuillez renseigner l'option : </label>
                 <input type="text" name="choixOption" value='<?= $choixOption?>'>

            <input type='hidden' name = 'id' size = 7 value='<?= $id ?>'>
        </fieldset>
    </div><!--fin classForm-->
   <center> <p><input type="submit" value="Envoyer"></center>
        </form>
</div> <!--fin contenu--> 
