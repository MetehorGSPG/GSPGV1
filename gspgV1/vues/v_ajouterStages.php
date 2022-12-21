<div id="titre">
    <h1>
        <center>Creation d'un Stage</center>
    </h1>
</div>

<form method="post" action="index.php?uc=stages&action=enregAjout" class="corpsForm">

    <div id="demande1b">
            <label>Libelle : </label>
            <input type="text" name="libelle">
    </div>
    <div id="demande1">
            <label>Veuillez indiquer la date de début de votre stage : </label>
            <input type="date" id="start" name="dateDebut">
    </div>


    <div id="demande1">
            <label>Veuillez indiquer la date de fin de votre stage : </label>
            <input type="date" id="start" name="dateFin">
    </div>

    <div id="demande1">
            <label>Veuillez renseigner la promotion : </label>
            <input type="text" name="promotion">
    </div>
    <div id="demande1">
            <label>Veuillez renseigner le numero du stage : </label>
            <input type="text" name="numero">
    </div>
    <div id="bouttonenvoie">
      <input type="submit" value="Envoyer">
    </div>

</form>