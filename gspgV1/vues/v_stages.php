<div id="contenu1">
    <div id="Titresuivistage">
        <h1><b>Liste des stages</b></h1>
    </div>
    <form method="post" action="index.php?uc=stages&action=majStages">
        <div id="Tableau">
            <Table border='4'>
                <TR>
                    <TH><b>Libellé</b></TH>
                    <TH><b> Date début</b></TH>
                    <TH><b> Date Fin</b></TH>
                </TR>
                <?php $i = 1; foreach ($stages as $stage) {
                ?>
                    <TR> 
                        <input type="hidden" name="promotion" value="<?= $stage['promotion']?>">
                        <input type="hidden" name="numero" value="<?= $stage['numero']?>">
                        <TD><?= $stage['libelle'] ?></TD>
                        <TD> <input type="date" name="dateDebut<?= $i++?>" value="<?= $stage['dateDebut'] ?>"></TD>
                        <TD> <input type="date" name="dateFin<?= $i++?>" value="<?= $stage['dateFin'] ?>"></TD>
                    </TR>
                <?php }
                ?>
            </Table>
        </div>
        <div id="boutonSubmit">
        <input type='submit' value='Enregistrer'>
        </div>
    </form>
    <a href="index.php?uc=stages&action=ajouterStages">Ajouter des stages.</a>
    <br>
    </br>
    

</div>