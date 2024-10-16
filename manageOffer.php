<?php
$nameOffer = "";
$step = isset($_GET["page"]) ? $_GET["page"] : 1 ;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Change le titre par le nom de l'offre -->
  <title><?php echo isset($nameOffer)? $nameOffer : "Gestion de l'offre" ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require_once "components/header.php" ?>
  <aside>
    <!-- Création ou modification -->
    <h2>de votre offre</h2>
    <div>
      <!-- Par un foreach écrire les étapes et leur avancée -->
    </div>
    <div>
      <a href="">Quitter</a> <!-- Sauvegarde et quitte -->
      <a href="">Annuler</a> <!-- Ne sauvegarde pas la saisie et quitte -->
    </div>
  </aside>
  <?php
    // Affichage du formulaire suivant l'étape indiquer par un chiffre dans la barre de recherche avec un require
    switch ($step) {
      case 1:
        require_once "components/offer/selectOffer.php";
        break;
      case 2:
        require_once "components/offer/detailsOffer.php";
        break;
      case 3:
        require_once "components/offer/localisationOffer.php";
        break;
      case 4:
        require_once "components/offer/contactOffer.php";
        break;
      case 5:
        require_once "components/offer/hourlyOffer.php";
        break;
      case 6:
        require_once "components/offer/previewOffer.php";
        break;
      case 7:
        require_once "components/offer/paymentOffer.php";
        break;
      
      default:
        echo "Page inconnue";
        break;
    }
  ?>
  <div>
    <!-- Bouton précédent et suivant -->
     <?php
     // Précédent
     if ($step > 1) {
      ?>
      <a href="manageOffer.php?page=<?php echo $step-1?>">Précédent</a>
      <?php
     }
     ?>
     <!-- Suivant -->
    <a href="manageOffer.php?page=<?php echo $step+1?>">Précédent</a>
  </div>
  <?php require_once "components/footer.php"; ?>
</body>
</html>