<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bgcss.css" />
<title>AOS: Battle Generator</title>
<?php 
include("generate.php");
include("data.php");?>
</head>
<body>

<header class="main-header">
    <h1><span class="logo"><img src="img/logo-aos-new.png" alt="Warhammer Age of Sigmar Warscroll Designer" /></span> Battle Generator</h1>
  </header>

  <div class="hidden" style="font-family: 'Pompei Std'; display: none">preload</div>

  <article class="main-description">
    <p>The <strong>Warhammer Age of Sigmar - Battle Generator</strong> is a web application designed to allow you to create battles for use in the Warhammer Age of Sigmar game by Games Workshop Limited.</p>
  </article>

  <form method="post"> 
        <input type="submit" name="generateBattle"
                class="generateBattle" value="Generate Battle" /> 
    </form> 

    <?php
    if (isset($_POST['generateBattle'])) {
      generateBattle($battle_plan, $realm);
}
    ?> 

</body>
</html>
