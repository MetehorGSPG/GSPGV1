 <!-- Division pour le sommaire -->
 <div id="contenu1">
    <?php 
 
      ?>

    <div id="menuGauche">
       <ul id="menuList">
          <li id="pres">
             Bonjour
             <?= $_SESSION['admin'] ?>
          </li>

          <ul>
             <li>
                Stage <?= $_SESSION['stage'] ?>
             </li>
             <li> <?= $_SESSION['option'] ?> </li>
          </ul>

          <br>
          <li class="smenu">
             <a href="index.php?uc=stages&action=afficherStages">
                Afficher les stages
             </a>
          </li>
          <li class="smenu">
             <a href="index.php?uc=stagiaires&action=afficherStagiaires">
                Afficher les stagiaires
             </a>
          </li>
          <li class="smenu">
             <a href="index.php?uc=entreprises&action=afficherEntreprises">
                Afficher les entreprises
             </a>
          </li>
          <li class="smenu">
             <a href="index.php?uc=formateurs&action=afficherFormateurs">
                Afficher les formateurs
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