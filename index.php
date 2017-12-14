<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include("vues/head.php"); ?>
    <body>
      <div class="contenaire">


        <?php
          //condition pour vérifier le mdp entré par l'utilisateur.
          if(!isset($_POST["mot_de_passe"])  || htmlspecialchars($_POST["mot_de_passe"])!="kangourou"){
        ?>

        <form class="formulaire_connexion" action="index.php" method="post">
          <p>
                <label>Mot de passe : </label>
                <input type="password" name="mot_de_passe" />
                <input type="submit" value="Valider" />
          </p>
        </form>
        <?php
          }else{
              echo "bon mot_de_passe, le code secret est 'YES'";

          echo "<br />";
          echo  "<a href='index.php'>retour</a>";
        }
        ?>


      </div>
    </body>
  <?php include("vues/foot.php"); ?>
</html>
