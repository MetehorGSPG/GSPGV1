<div id="titre">
    <h1>
        <center>Modification d'un stagiaire</center>
    </h1>
</div>

<form method="post" action="index.php?uc=stagiaires&action=enregModif">
  
    <div id="demande1">

        <label>Nom : </label>
        <input type="text" name="nom" value="<?= $nom?>">

    </div>

    <div id="demande1">

        <label>Prenom : </label>
        <input type="text" name="prenom" value="<?= $prenom?>">

    </div>

    <div id="demande1">

        <label>Adresse : </label>
        <input type="text" name="adresse" value="<?= $adresse?>">

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
        <label>Veuillez renseigner la promotion : </label>
        <input type="text" name="promotion" value="<?= $promotion?>">
    </div>

    <div id="demande1">
        <label>Veuillez renseigner l'option du stagiaire : </label>
        <input type="text" name="choixOption" value="<?= $choixOption?>">
    </div>

    <input type='hidden' name = 'id' size = 7 value='<?= $id ?>'>
    
    <div id="bouttonenvoie">
        <input type="submit" value="Envoyer">
    </div>

</form>