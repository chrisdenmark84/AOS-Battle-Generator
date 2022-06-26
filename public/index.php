<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/bgcss.css" />
  <title>Warhammer Age of Sigmar - Battle Generator</title>
  <?php
  include("../src/generate.php");
  ?>
</head>

<body>

  <!-- Set the input to last generated, if none generated before set to 1 -->
  <?php
  if (isset($_POST['quantity'])) {
    $numLastGen = $_POST['quantity'];
  } else {
    $numLastGen = 1;
  }
  ?>

  <!-- Header of document -->
  <header class="main-header">
    <h1><span class="logo"><img src="img/logo-aos-new.png" alt="Warhammer Age of Sigmar Warscroll Designer" /></span> Battle Generator</h1>
  </header>

  <div class="hidden" style="font-family: 'Pompei Std'; display: none">preload</div>

  <article class="main-description">
    <p>The <strong>Warhammer Age of Sigmar - Battle Generator</strong> is a web application designed to allow you to create battles for use in the Warhammer Age of Sigmar game by Games Workshop Limited.</p>
  </article>

  <!-- Input form for battles -->
  <div class="form">
    <form method="post">
      <label for="quantity">Number of battles: </label>
      <input type="number" id="quantity" name="quantity" min="1" max="10" value="<?php echo $numLastGen; ?>">
      <input type="submit" name="generateBattle" class="generateBattle" value="Generate Battle" />
    </form>
  </div>

  <!-- Battles output -->
  <div class="allresults">
    <?php

    if (isset($_POST['generateBattle'])) {
      $numbattles = $_POST['quantity'];

      // I'm creating a new instance of the Generate Class calld $generateBattles
      $generateBattles = new generate;

      //Im calling the generateBattle function and then looping through it here
      foreach ($generateBattles->generateBattle($numbattles) as $battle) {

        // Im echoing it out
        echo sprintf(
          '<div class="result">
                <h3>Battle %d</h3>
                <h4>Battleplan:</h4>
                <p>%s </p>
                <p>%s</p>
                <h4>Realm:</h4>
                <p>%s</p>
              </div>',
          $battle['count'],
          $battle['battle_plan_name'],
          $battle['battle_plan_book'],
          $battle['realm_name']
        );
      }
    }
    ?>
  </div>
</body>

</html>