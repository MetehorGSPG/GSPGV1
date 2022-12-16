 <!-- Division pour le sommaire -->
 <div id="contenu1">
    <?php $choixStage = $_POST['stageop'];
      $choixOption = $_POST['options'];  ?>

    <div id="menuGauche">
       <div id="infosUtil">

          <h2>

          </h2>

       </div>
       <ul id="menuList">
          <li id="pres">
             Bonjour
             <?= $_SESSION['admin'] ?>
          </li>

          <ul>
             <li>
                Stage <?= $choixStage ?>
             </li>
             <li> <?= $choixOption ?> </li>
          </ul>

          <br>
          <li class="smenu">
             <a href="#">
                Afficher les stages
             </a>
          </li>
          <li class="smenu">
             <a href="index.php?uc=connexion&action=changerStageOuOption" title="changer de stage et/ou d'options">Changer de stage ou d'option</a>
          </li>
          <li class="smenu">
             <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
          </li>
       </ul>
       </ul>
    </div>
 </div>