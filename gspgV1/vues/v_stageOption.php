<div id="titre">
  <h1>
    <center>Gestionnaire des taches</center>
  </h1>
</div>
<form method="post" action="index.php?uc=connexion&action=formulaire">
  <div id="demande1">
    <center>
      <label for="stage_select">Quel est le stage en question? : </label>
      <select name="stageop">
        <?php foreach ($stages as $stage) {
        ?>
          <option value="<?= $stage['id'] ?>"><?= $stage['libelle'] ?></option>
        <?php } ?>
      </select>
    </center>
  </div>
  <div id="demande2">
    <center>
      <label for="stage_select">Quel option souhaitez-vous? : </label>
      <select name="options">
        <option value="SLAM">SLAM</option>
        <option value="SISR">SISR</option>
      </select>
    </center>
  </div>
  <div id="bouttonenvoie">
    <center><input type="submit" value="Envoyer le formulaire"></center>
  </div>
</form>