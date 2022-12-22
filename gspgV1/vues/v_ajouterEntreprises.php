<div id="titre">
    <h1>
        <center> Ajout d'une entreprise </center>
    </h1>
</div>

<form method="post" action="index.php?uc=entreprises&action=enregAjout">
  
    <div id="demande1">

        <label>Nom de l'entreprise : </label>
        <input type="text" name="nom">

    </div>


    <div id="demande1">

        <label>Adresse de l'entreprise : </label>
        <input type="text" name="adresse">

    </div>

    <div id="demande1">

        <label>Ville : </label>
        <input type="text" name="ville">

    </div>


    <div id="demande1">

        <label>Adresse Mail : </label>
        <input type="email" name="mail">

    </div>
    <div id="demande1">

        <label>Numéro de Téléphone : </label>
        <input type="text" name="tel">

    </div>

    <div id="demande1">
        <label>Le nom du tuteur de stage : </label>
        <input type="text" name="nomTuteurStage">
    </div>

    <div id="demande1">
        <label>Téléphone du tuteur de stage : </label>
        <input type="text" name="telTuteurStage">
    </div>
    
    <div id="bouttonenvoie">
        <input type="submit" value="Envoyer">
    </div>

</form>