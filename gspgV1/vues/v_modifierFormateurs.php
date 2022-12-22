<div id="titre">
    <h1>
        <center>Modification d'un formateur</center>
    </h1>
</div>

<form method="post" action="index.php?uc=formateurs&action=enregModif">
  
    <div id="demande1">

        <label>Nom : </label>
        <input type="text" name="nom" value="<?= $nom?>">

    </div>

    <div id="demande1">

        <label>Prenom : </label>
        <input type="text" name="prenom" value="<?= $prenom?>">

    </div>


    <div id="demande1">

        <label>Adresse Mail : </label>
        <input type="email" name="mail" value="<?= $mail?>">

    </div>
    <div id="demande1">

        <label>Numéro de Téléphone : </label>
        <input type="text" name="tel" value="<?= $tel?>">

    </div>

    <input type='hidden' name = 'id' size = 7 value='<?= $id ?>'>
    
    <div id="bouttonenvoie">
        <input type="submit" value="Envoyer">
    </div>

</form>