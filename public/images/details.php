<!DOCTYPE html>
<html lang="fr">
<head>

  <?php include("https.php"); ?>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173302597-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-173302597-1');
  </script>

  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window,document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
   fbq('init', '626567637989440');
  fbq('track', 'PageView');
  </script>
  <noscript>
   <img height="1" width="1"
  src="https://www.facebook.com/tr?id=626567637989440&ev=PageView
  &noscript=1"/>
  </noscript>

  <?php

    $id = $_GET["id"];

    include("./admin/connexion.php");
    $rep = $bdd->query("SELECT * FROM programmes WHERE ID = '$id'");
    while ($data = $rep->fetch()){

      $titre = $data["titre"];
      $ville = $data["ville"];
      $disponibles = $data["disponibles"];
      $point1 = $data["point1"];
      $texte1 = $data["texte1"];
      $titrebutton1 = $data["titrebutton1"];
      $button1 = $data["button1"];
      $image1 = $data["image1"];
      $point2 = $data["point2"];
      $texte2 = $data["texte2"];
      $titrebutton2 = $data["titrebutton2"];
      $button2 = $data["button2"];
      $image2 = $data["image2"];
      $position = $data["positiongps"];
      $img1 = $data["img1"];
      $img2 = $data["img2"];
      $img3 = $data["img3"];
      $img4 = $data["img4"];
      $img5 = $data["img5"];
      $img6 = $data["img6"];
      $img7 = $data["img7"];
      $img8 = $data["img8"];
      $img9 = $data["img9"];
      $img10 = $data["img10"];
      $subtitle = $data["subtitle"];
      $departement = $data["departement"];
      $tag = $data["tague"];
      $isPrestige = $data["isPrestige"];

    }
    $rep->closeCursor();

  ?>

  <meta charset="utf-8">
  <title>Harmony Promotion • <?php echo $titre; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link rel="icon" type="image/png" href="./images/ico.png" />

  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <link href="./css/reset.css" rel="stylesheet">

  <link href="./css/style-screen.css" media="screen and (min-width: 1700px)" rel="stylesheet">
  <link href="./css/style.css" media="screen and (min-width: 1250px) and (max-width: 1700px)" rel="stylesheet">
  <link href="./css/style-tablette.css" media="screen and (min-width: 425px) and (max-width: 1250px)" rel="stylesheet">
  <link href="./css/style-mobile.css" media="screen and (max-width: 425px)" rel="stylesheet">

  <link href="./css/details-screen.css" media="screen and (min-width: 1700px)" rel="stylesheet">
  <link href="./css/details.css" media="screen and (min-width: 768px) and (max-width: 1700px)" rel="stylesheet">
  <link href="./css/details-tablette.css" media="screen and (min-width: 620px) and (max-width: 768px)" rel="stylesheet">
  <link href="./css/details-mobile.css" media="screen and (max-width: 620px)" rel="stylesheet">

  <!--
  <link href="./css/details-400.css" media="screen and (max-width: 400px)" rel="stylesheet">
  <link href="./css/details-400-500.css" media="screen and (min-width: 400px) and (max-width: 500px)" rel="stylesheet">
  <link href="./css/details-500-600.css" media="screen and (min-width: 500px) and (max-width: 600px)" rel="stylesheet">
  <link href="./css/details-600-700.css" media="screen and (min-width: 600px) and (max-width: 700px)" rel="stylesheet">
  <link href="./css/details-700-800.css" media="screen and (min-width: 700px) and (max-width: 800px)" rel="stylesheet">
  <link href="./css/details-800-900.css" media="screen and (min-width: 800px) and (max-width: 900px)" rel="stylesheet">
  <link href="./css/details-900-1000.css" media="screen and (min-width: 900px) and (max-width: 1000px)" rel="stylesheet">
  <link href="./css/details-1000-1100.css" media="screen and (min-width: 1000px) and (max-width: 1100px)" rel="stylesheet">
  <link href="./css/details-1100-1200.css" media="screen and (min-width: 1100px) and (max-width: 1200px)" rel="stylesheet">
  <link href="./css/details-1200-1300.css" media="screen and (min-width: 1200px) and (max-width: 1300px)" rel="stylesheet">
  <link href="./css/details-1300-1400.css" media="screen and (min-width: 1300px) and (max-width: 1400px)" rel="stylesheet">
  <link href="./css/details-1400-1500.css" media="screen and (min-width: 1400px) and (max-width: 1500px)" rel="stylesheet">
  <link href="./css/details-1500-1600.css" media="screen and (min-width: 1500px) and (max-width: 1600px)" rel="stylesheet">
  <link href="./css/details-1600-1700.css" media="screen and (min-width: 1600px) and (max-width: 1700px)" rel="stylesheet">
  <link href="./css/details-1700-1800.css" media="screen and (min-width: 1700px) and (max-width: 1800px)" rel="stylesheet">
  <link href="./css/details-1800-1900.css" media="screen and (min-width: 1800px) and (max-width: 1900px)" rel="stylesheet">
  <link href="./css/details-1900-2000.css" media="screen and (min-width: 1900px) and (max-width: 2000px)" rel="stylesheet">
  <link href="./css/details-2000-2100.css" media="screen and (min-width: 2000px) and (max-width: 2100px)" rel="stylesheet">
  <link href="./css/details-2100-2200.css" media="screen and (min-width: 2100px) and (max-width: 2200px)" rel="stylesheet">
  <link href="./css/details-2200-2300.css" media="screen and (min-width: 2200px) and (max-width: 2300px)" rel="stylesheet">
  <link href="./css/details-2300-2400.css" media="screen and (min-width: 2300px) and (max-width: 2400px)" rel="stylesheet">
  <link href="./css/details-2400-2500.css" media="screen and (min-width: 2400px) and (max-width: 2500px)" rel="stylesheet">
  <link href="./css/details-2500.css" media="screen and (min-width: 2500px)" rel="stylesheet">
  -->

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>

<body>

  <?php include("header.php"); ?>

  <div id="imageDetails" style="background-image: url('./admin/uploads/<?php echo $img1; ?>'); background-size: 100% 100%;">

    <div class="logos border border-dark" style="background-color: rgb(0, 48, 60); width: 100px; height: 100px; border-radius: 50%; padding: 20px;">
      <a onclick='openPhotos();'>
        <div style="width: 100%; height: 100%; background-image: url('./images/photos.png'); background-size: cover;"></div>
      </a>
      <!--<a href=""><img src="./images/3d.svg" title="Visite 3D" /></a>-->
      <!--<a href="rendez-vous.php?programme=<?php echo $id; ?>"><img src="./images/caméra.svg" title="Rendez-vous visio"/></a>-->
    </div>

    <div class="title">

      <div class="one">

        <h1 style="<?= $isPrestige === "1" ? 'font-family: \'Playfair Display\', serif; color:black;' : 'font-family: \'Handlee\'; color:#336336;' ?>; padding-bottom: 4px;"><?php echo $titre; ?>
            <?php if($isPrestige === "1"): ?>
                <span style="display: block; font-style:italic; font-size: 16px;" id="spanPrestige">by Harmony Prestige</span>
            <?php endif; ?>
        </h1>
        <h3 style="font-family: 'Montserrat'; color: <?= $isPrestige === "1" ? '#546E7A' : '#8DC63F' ?>;"><?php echo $ville; ?></h3>
        <h3 style="font-family: 'Montserrat'; color: <?= $isPrestige === "1" ? '#546E7A' : '#8DC63F' ?>;"><?php echo $disponibles; ?></h3>

      </div>

      <div class="two" style="<?= $isPrestige === "0" ? 'background-color: #336336!important;' : '' ?>">
        <a href="rappel.php?programme=<?php echo $id; ?>"><div class="item"><img src="./images/appel-w.png" style=""/></div></a>
        <a href="brochure.php?programme=<?php echo $id; ?>"><div class="item"><img src="./images/brochure-w.png" style=""/></div></a>
      </div>

    </div>

  </div>

  <div id="visionneuse" style="display: none; background-image: url('./admin/uploads/<?php echo $img1; ?>'); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;">
  </div>

  <div id="closeVisio" style="display: none;" onclick="openPhotos();"><p style="font-family: 'Montserrat';">Fermer</p></div>

  <div id="photosContainer" style="display: none;">

    <?php if ($img1 != ""){ ?><div class="photo" style="background-image: url('./admin/uploads/<?php echo $img1; ?>'); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;" onclick="changePhoto(1);"/></div><?php } ?>
    <?php if ($img2 != ""){ ?><div class="photo" style="background-image: url('./admin/uploads/<?php echo $img2; ?>'); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;" onclick="changePhoto(2);"/></div><?php } ?>
    <?php if ($img3 != ""){ ?><div class="photo" style="background-image: url('./admin/uploads/<?php echo $img3; ?>'); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;" onclick="changePhoto(3);"/></div><?php } ?>
    <?php if ($img4 != ""){ ?><div class="photo" style="background-image: url('./admin/uploads/<?php echo $img4; ?>'); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;" onclick="changePhoto(4);"/></div><?php } ?>
    <?php if ($img5 != ""){ ?><div class="photo" style="background-image: url('./admin/uploads/<?php echo $img5; ?>'); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;" onclick="changePhoto(5);"/></div><?php } ?>
    <?php if ($img6 != ""){ ?><div class="photo" style="background-image: url('./admin/uploads/<?php echo $img6; ?>'); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;" onclick="changePhoto(6);"/></div><?php } ?>
    <?php if ($img7 != ""){ ?><div class="photo" style="background-image: url('./admin/uploads/<?php echo $img7; ?>'); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;" onclick="changePhoto(7);"/></div><?php } ?>
    <?php if ($img8 != ""){ ?><div class="photo" style="background-image: url('./admin/uploads/<?php echo $img8; ?>'); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;" onclick="changePhoto(8);"/></div><?php } ?>
    <?php if ($img9 != ""){ ?><div class="photo" style="background-image: url('./admin/uploads/<?php echo $img9; ?>'); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;" onclick="changePhoto(9);"/></div><?php } ?>
    <?php if ($img10 != ""){ ?><div class="photo" style="background-image: url('./admin/uploads/<?php echo $img10; ?>'); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;" onclick="changePhoto(10);"/></div><?php } ?>

  </div>

  <script type="text/javascript">

    function openPhotos(){

      if (document.getElementById("photosContainer").style.display == "none"){
        document.getElementById("photosContainer").style.display = "block";
        document.getElementById("visionneuse").style.display = "block";
        document.getElementById("closeVisio").style.display = "block";
        document.getElementById("imageDetails").style.filter = "blur(5px)";
      }
      else {
        document.getElementById("photosContainer").style.display = "none";
        document.getElementById("visionneuse").style.display = "none";
        document.getElementById("closeVisio").style.display = "none";
        document.getElementById("imageDetails").style.filter = "blur(0px)";
      }

    }

    function changePhoto(id){

      if (id == 1){
        document.getElementById('visionneuse').style.backgroundImage = "url('./admin/uploads/<?php echo $img1; ?>')";
      }
      if (id == 2){
        document.getElementById('visionneuse').style.backgroundImage = "url('./admin/uploads/<?php echo $img2; ?>')";
      }
      if (id == 3){
        document.getElementById('visionneuse').style.backgroundImage = "url('./admin/uploads/<?php echo $img3; ?>')";
      }
      if (id == 4){
        document.getElementById('visionneuse').style.backgroundImage = "url('./admin/uploads/<?php echo $img4; ?>')";
      }
      if (id == 5){
        document.getElementById('visionneuse').style.backgroundImage = "url('./admin/uploads/<?php echo $img5; ?>')";
      }
      if (id == 6){
        document.getElementById('visionneuse').style.backgroundImage = "url('./admin/uploads/<?php echo $img6; ?>')";
      }
      if (id == 7){
        document.getElementById('visionneuse').style.backgroundImage = "url('./admin/uploads/<?php echo $img7; ?>')";
      }
      if (id == 8){
        document.getElementById('visionneuse').style.backgroundImage = "url('./admin/uploads/<?php echo $img8; ?>')";
      }
      if (id == 9){
        document.getElementById('visionneuse').style.backgroundImage = "url('./admin/uploads/<?php echo $img9; ?>')";
      }
      if (id == 10){
        document.getElementById('visionneuse').style.backgroundImage = "url('./admin/uploads/<?php echo $img10; ?>')";
      }

    }

  </script>

  <?php

    if ($_GET["id"] == '2'){
      ?>
        <div style="width: 100%; text-align: center;">
          <h2 style="font-family: 'Handlee'; color: #336336; font-size: 20px; font-weight: bold; margin-top: 90px;">Nos commerciaux sont à votre disposition dans notre bureau de vente !</h2>
          <h4 style="font-family: 'Montserrat'; font-size: 15px; font-weight: bold;">40-42 Avenue Maurice Berteaux, 94420 Le Plessis-Trévise</h4>

          <a href="rappel.php?programme=<?php echo $id; ?>">
            <div style="background-color: #8DC63F; border-radius: 5px; margin-top: 20px; display: inline-block; height: 43px; margin-bottom: 20px;">
              <p style="color: white; padding: 10px; padding-left: 30px; padding-right: 30px; font-family: 'Montserrat';">Prendre rendez-vous</p>
            </div>
          </a>

        </div>
      <?php
    }
    else {
      ?><br /><br /><br /><?php
    }

  ?>
  <?php if($isPrestige === "1"): ?>
  <div id="prestige">
      <h1 style="<?= $isPrestige === "1" ? 'font-family: \'Playfair Display\', serif; color:rgb(0, 48, 60);' : 'font-family: \'Handlee\'; color:#336336;' ?>">LA GAMME HARMONY PRESTIGE<br />OÙ RÉINVENTER LE LUXE À LA FRANÇAISE</h1>


      <div class="container" style="text-align: justify;">
          <p style="font-family: 'Montserrat'; color: #3b4754;">Fervent défenseur de la planète, Harmony Prestige s’appuie sur l’innovation pour créer des biens luxueux et
              respectueux afin de répondre aux défis environnementaux de notre siècle.</p>
          <p style="font-family: 'Montserrat'; color: #3b4754;">
              Plus que l’acquisition d’une résidence principale ou secondaire, Harmony Promotion vous propose une palette de services haut de gamme sur-mesure tels que :  le
              service 3 étoiles pour votre déménagement, la conciergerie au quotidien, la Smart house évolutive pour piloter votre logement ou Harmo’bility, à votre disposition
              pour vos déplacements.
          </p>
          <p style="font-family: 'Montserrat'; color: #3b4754;">
              Écoute, discrétion et efficacité : vous procurer une expérience dédiée à votre bien-être est une priorité.
          </p>
          <p style="font-family: 'Montserrat'; color: #3b4754;">
              L’innovation, le standing et la performance de nos projets sont au centre de notre stratégie. Nos experts choisissent rigoureusement les emplacements de nos
              biens pour vous offrir un cadre de vie sélectif et privilégié. Nos partenaires, sont quant à eux reconnus pour leur savoir-faire et leur excellence, nous
              permettant d’investir ardemment dans l’écologie et créer des programmes immobiliers toujours plus innovants.
          </p>
      </div>

  </div>
  <?php endif; ?>

  <div id="biens">

    <h1 style="<?= $isPrestige === "1" ? 'font-family: \'Playfair Display\', serif; color:rgb(0, 48, 60);' : 'font-family: \'Handlee\'; color:#336336;' ?>">Biens disponibles</h1>

    <?php

      $displayBiens = "no";

      include("./admin/connexion.php");
      $rep = $bdd->query("SELECT * FROM programmes WHERE ID = '$id'");
      while ($data = $rep->fetch()){

      $idofprogramme = $data["ID"];

        include("./admin/connexion.php");
        $req = $bdd->query("SELECT * FROM biens WHERE programme = '$idofprogramme'");
        while ($info = $req->fetch()){
          if (isset($info["ID"]) AND !empty($info["ID"])){
            $displayBiens = "yes";
          }
        }
        $rep->closeCursor();

      }
      $rep->closeCursor();

      if ($displayBiens == "yes"){
        ?>
          <h2 style="font-family: 'Montserrat'; color: #3b4754;">Tout ce dont vous rêvez à portée de main</h2>
        <?php
      }
      else {
        ?>
          <h2 style="font-family: 'Montserrat'; color: #3b4754;">Les biens de ce programme serons disponibles prochainement</h2>
        <?php
      }

      if(in_array($id, [6, 7])) {
          ?>
          <h2 style="font-family: 'Montserrat'; color: #3b4754;">Inscrivez-vous sans plus attendre pour être informé en priorité dès la sortie de ce projet.</h2>

          <a href="brochure.php?programme=<?= $id ?>" id="aBiens">
              <div style="background-color: rgb(0, 48, 60); border-radius: 5px; display: inline-block; height: 43px; margin-bottom: 20px;">
              <p style="color: white; padding: 10px; padding-left: 30px; padding-right: 30px; font-family: 'Montserrat';">
                      S'inscrire
                  </p>
              </div>
          </a>

          <?php
      }

    ?>



    <div class="container">




      <?php

        $lower_price = '';

        include("./admin/connexion.php");
        $rep = $bdd->query("SELECT * FROM programmes WHERE ID = '$id'");
        while ($data = $rep->fetch()){

          $idofprogramme = $data["ID"];

          include("./admin/connexion.php");
          $req = $bdd->query("SELECT * FROM biens WHERE programme = '$idofprogramme'");
          while ($info = $req->fetch()){

            $idbien = $info["ID"];

            $exist2d = "no";
            $exist3d = "no";

            include("./admin/connexion.php");
            $repp = $bdd->query("SELECT * FROM lots WHERE bien = '$idbien'");
            while ($inf = $repp->fetch()){
              if ($inf["plan_2d"] != ""){
                $exist2d = "yes";
              }
              if ($inf["plan_3d"] != ""){
                $exist3d = "yes";
              }
            }
            $repp->closeCursor();

            // ########################################################

            // BIEN  //$(".iconesCont").css("margin-top", "-90px");

            ?>
              <div class="item" style="font-family: 'Montserrat'; <?= $isPrestige === "1" ? 'background-color: rgb(0, 48, 60) !important;' : '' ?>">
                <div class="one"><p><?php echo $info["titre"]; ?></p></div>
                <div class="two"><p><?php echo $info["surface"]; ?></p></div>
                <div class="three"><p><?php echo $info["prix"]; ?></p></div>
                <div class="four"><p><?php echo $info["disponibles"]; ?></p></div>
                <div class="five">
                  <?php
                    if ($exist3d == "yes"){
                      ?><div class="button" style="cursor: pointer;" onclick="
                  /*
                  if (this.style.backgroundColor == 'rgb(211, 156, 47)'){
                    this.style.backgroundColor = '#336336';
                  }
                  else {
                    this.style.backgroundColor = 'rgb(211, 156, 47)';
                  }
                  */
                  if (document.getElementById('deroule<?php echo $idbien; ?>').innerHTML == '<p>▼</p>'){
                    document.getElementById('deroule<?php echo $idbien; ?>').innerHTML = '<p>▲</p>';
                    $('.sub<?php echo $idbien; ?>').css('display', 'block');
                    $('.content<?php echo $idbien; ?>').css('display', 'block');
                  }else{
                    document.getElementById('deroule<?php echo $idbien; ?>').innerHTML = '<p>▼</p>';
                    $('.sub<?php echo $idbien; ?>').css('display', 'none');
                    $('.content<?php echo $idbien; ?>').css('display', 'none');
                  }
                "><h2>Plan 3D</h2></div><?php
                    }
                    elseif ($exist2d == "yes"){
                      ?><div class="button" style="cursor: pointer;" onclick="
                  /*
                  if (this.style.backgroundColor == 'rgb(211, 156, 47)'){
                    this.style.backgroundColor = '#336336';
                  }
                  else {
                    this.style.backgroundColor = 'rgb(211, 156, 47)';
                  }
                  */
                  if (document.getElementById('deroule<?php echo $idbien; ?>').innerHTML == '<p>▼</p>'){
                    document.getElementById('deroule<?php echo $idbien; ?>').innerHTML = '<p>▲</p>';
                    $('.sub<?php echo $idbien; ?>').css('display', 'block');
                    $('.content<?php echo $idbien; ?>').css('display', 'block');
                  }else{
                    document.getElementById('deroule<?php echo $idbien; ?>').innerHTML = '<p>▼</p>';
                    $('.sub<?php echo $idbien; ?>').css('display', 'none');
                    $('.content<?php echo $idbien; ?>').css('display', 'none');
                  }
                "><h2>Plan 2D</h2></div><?php
                    }
                  ?>
                </div>
                <div class="six" id="deroule<?php echo $idbien; ?>" style="margin-left: 4px;" onclick="
                  /*
                  if (this.style.backgroundColor == 'rgb(211, 156, 47)'){
                    this.style.backgroundColor = '#336336';
                  }
                  else {
                    this.style.backgroundColor = 'rgb(211, 156, 47)';
                  }
                  */
                  if (document.getElementById('deroule<?php echo $idbien; ?>').innerHTML == '<p>▼</p>'){
                    document.getElementById('deroule<?php echo $idbien; ?>').innerHTML = '<p>▲</p>';
                    $('.sub<?php echo $idbien; ?>').css('display', 'block');
                    $('.content<?php echo $idbien; ?>').css('display', 'block');
                  }else{
                    document.getElementById('deroule<?php echo $idbien; ?>').innerHTML = '<p>▼</p>';
                    $('.sub<?php echo $idbien; ?>').css('display', 'none');
                    $('.content<?php echo $idbien; ?>').css('display', 'none');
                  }
                "><p>▼</p></div>
              </div>
            <?php

            // ########################################################

            $title = "no";

            include("./admin/connexion.php");
            $repp = $bdd->query("SELECT * FROM lots WHERE bien = '$idbien'");
            while ($inf = $repp->fetch()){

              if ($lower_price == ""){
                $lower_price = $inf["prix"];
              }
              else {

                if ($inf["prix"] < $lower_price){
                  $lower_price = $inf["prix"];
                }

              }

              // ########################################################

              // LOTS DU BIEN

              if ($title == "no"){
                $title = "yes";
                ?>
                  <div class="subtitle sub<?php echo $idbien; ?>" style="display: none; font-family: 'Montserrat';">
                    <div class="one"><p>Lot</p></div>
                    <div class="two"><p>Surface</p></div>
                    <div class="three"><p>Étage</p></div>
                    <div class="four"><p>Orientation</p></div>
                    <div class="five"><p>Extérieur</p></div>
                    <div class="six"><p>Parking</p></div>
                    <div class="seven"><p>Plan</p></div>
                    <div class="eight"><p>Actions</p></div>
                  </div>
                <?php
              }

              ?>

                <div class="subcontent content<?php echo $idbien; ?>" style="display: none; font-family: 'Montserrat';">
                  <div class="one"><p><?php echo $inf["lot"]; ?></p></div>
                  <div class="two"><p><?php echo $inf["surface"]; ?></p></div>
                  <div class="three"><p><?php echo $inf["etage"]; ?></p></div>
                  <div class="four"><p><?php echo $inf["orientation"]; ?></p></div>
                  <div class="five"><p><?php echo $inf["exterieur"]; ?></p></div>
                  <div class="six"><p><?php echo $inf["parking"]; ?></p></div>
                  <div class="seven"><p>
                    <?php if ($inf["plan_2d"] != ""){ ?><a href="pdf.php?doc=<?php echo $inf['plan_2d']; ?>" target="_blank"><img src="./images/2d.png" style=""/></a><?php } ?>
                    <?php if ($inf["plan_3d"] != ""){ ?><a href="pdf.php?doc=<?php echo $inf['plan_3d']; ?>" target="_blank"><img src="./images/3d.png" style=""/></a><?php } ?>
                  </p></div>
                  <div class="eight"><p>
                    <a href="rappel.php?bien=<?php echo $inf['ID']; ?>"><img src="./images/phone-black.png" title="Etre rappeler" style=""/></a>
                    <a href="rendez-vous.php?bien=<?php echo $inf['ID']; ?>"><img src="./images/visio-black.png" title="Rendez-vous visio" style=""/></a>
                    <a href="brochure.php?bien=<?php echo $inf['ID']; ?>"><img src="./images/mail-black.png" title="Brochure" style=""/></a>
                  </p></div>
                </div>

              <?php

              // ########################################################

            }
            $repp->closeCursor();

          }
          $req->closeCursor();

        }
        $rep->closeCursor();

      ?>


    </div>

  </div>



  <?php

    if ($point1 != "" AND $texte1 != ""){
      ?>

        <div id="sectionOne">

          <div class="image" style="background-image: url('./admin/uploads/<?php echo $image1; ?>'); background-size: 100% 100%; background-position: center;"></div>

          <div class="texte">
            <h1 style="<?= $isPrestige === "1" ? 'font-family: \'Playfair Display\', serif; color:rgb(0, 48, 60);' : 'font-family: \'Handlee\'; color:#336336;' ?>"><?php echo $point1; ?></h1>
            <h2 style="font-family: 'Montserrat'; color: #3b4754;"><?php echo $texte1; ?></h2>
            <?php if ($button1 != ""){ ?>
                <a href="<?php echo $button1; ?>" style="text-decoration: none;">
                    <div class="button" style="<?= $isPrestige === "1" ? 'background-color:rgb(0, 48, 60) !important;' : '' ?>">
                        <p style="font-family: 'Montserrat';"><?php echo $titrebutton1; ?></p>
                    </div>
                </a>
            <?php } ?>
          </div>

        </div>

      <?php
    }
    else {
      ?>

        <div id="sectionOne" style="height: 0px!important;">
        </div>

      <?php
    }

  ?>

  <?php

    if ($point2 != "" AND $texte2 != ""){
      ?>

        <div id="sectionTwo">

          <div class="texte">

            <h1 style="<?= $isPrestige === "1" ? 'font-family: \'Playfair Display\', serif; color:rgb(0, 48, 60);' : 'font-family: \'Handlee\'; color:#336336;' ?>"><?php echo $point2; ?></h1>
            <h2 style="font-family: 'Montserrat'; color: #3b4754;"><?php echo $texte2; ?></h2>
            <?php if ($button2 != ""){ ?>
                <a href="<?php echo $button2; ?>" style="text-decoration: none;">
                    <div class="button" style="<?= $isPrestige === "1" ? 'background-color:rgb(0, 48, 60) !important;' : '' ?>">
                        <p style="font-family: 'Montserrat';"><?php echo $titrebutton2; ?></p>
                    </div>
                </a>
            <?php } ?>

          </div>

          <div class="image" style="background-image: url('./admin/uploads/<?php echo $image2; ?>'); background-size: 100% 100%; background-position: center;"></div>

        </div>

      <?php
    }
    else {
      ?>

        <div id="sectionTwo" style="height: 0px!important;">
        </div>

      <?php
    }

  ?>




  <div id="plan">

    <h1 style="<?= $isPrestige === "1" ? 'font-family: \'Playfair Display\', serif; color:rgb(0, 48, 60);' : 'font-family: \'Handlee\'; color:#336336;' ?>">Plan du quartier</h1>
    <h2 style="font-family: 'Montserrat'; color: #3b4754;">Tout ce dont vous rêvez à portée de main</h2>

    <div id="map" style="width: 100%; height: 100%;">
    </div>

    <div class="menu">
    </div>

  </div>

  <?php

    $biens = 0;

    include("./admin/connexion.php");
    $rep = $bdd->query('SELECT * FROM lots');
    while ($data = $rep->fetch()){
      $biens++;
    }
    $rep->closeCursor();

  ?>

  <div id="autres">

    <h1 style="font-family: 'Handlee'; color: #336336;">Autres biens à proximité</h1>
    <h2 style="font-family: 'Montserrat'; color: #3b4754;"><?php echo $biens; ?> biens aux alentours</h2>

    <div class="container">

      <div class="prev"><p><!--<--></p></div>

      <div class="content">


        <?php

        include("./admin/connexion.php");
        $rep = $bdd->query('SELECT * FROM programmes ORDER BY rand() DESC LIMIT 4');
        while ($data = $rep->fetch()){

          $lower_price = '';

          $idprogramme = $data["ID"];

          $ville = $data["ville"];
          $titre = $data["titre"];
          $texte = $data["texte1"];
          $image = $data["img1"];
          $tag = $data["tague"];
          $isPrestige = $data["isPrestige"];


          include("./admin/connexion.php");
          $req = $bdd->query("SELECT * FROM biens WHERE programme = '$idprogramme' ORDER BY ID DESC");
          while ($info = $req->fetch()){

            $idbien = $info["ID"];
            $lower_price = $info["prix"];

            /*
            include("./admin/connexion.php");
            $repp = $bdd->query("SELECT * FROM lots WHERE bien = '$idbien'");
            while ($inf = $repp->fetch()){

              if ($lower_price == ""){
                $lower_price = $inf["prix"];
              }
              else {

                if ($inf["prix"] < $lower_price){
                  $lower_price = $inf["prix"];
                }

              }

            }
            $repp->closeCursor();
            */

          }
          $req->closeCursor();

          ?>

            <a href="details.php?id=<?php echo $idprogramme; ?>">
                <div class="item">
                  <div class="one" style="background-image: url('./admin/uploads/<?php echo $image; ?>'); background-position: center;">
                  </div>
                  <div class="two <?= $isPrestige === "1" ? 'prestige' : '' ?>">
                    <?php if ($tag != ""){ ?><div class="indicateur"><p style="font-family: 'Montserrat';"><?php echo $tag; ?></p></div><?php } ?>
                    <?php
                    if($isPrestige === "0") {
                        if (empty($lower_price) || $lower_price == ""){
                            ?><div class="prix"><b style="font-family: 'Montserrat'; color: white;"></b></div><?php
                        }
                        else {
                            ?><div class="prix"><b style="font-family: 'Montserrat'; color: #3B4754;"><?php echo $lower_price; ?></b></div><?php
                        }
                    }
                    ?>
                    <h1 style="<?= $isPrestige ? "color: white; font-family: 'Playfair Display', serif;" : "color: #336336; font-family: 'Handlee';" ?>;"><?php echo $ville; ?></h1>
                    <h3 style="font-family: 'Montserrat'; <?= $isPrestige ? "color: white;" : "color: #d39c2f" ?>;"><?php echo $titre; ?>
                        <?php if($isPrestige === "1"): ?>
                            <span style="display: block; font-style:italic; font-size: 16px; color: white">by Harmony Prestige</span>
                        <?php endif; ?>
                    </h3>
                    <p class="texte" style="font-family: 'Montserrat'; <?= $isPrestige ? "color: white;" : "color: #3B4754;" ?>">
                      <?php
                        if (strlen($texte) > 98){
                          echo substr($texte, 0, 98)."...";
                        }
                        else {
                          echo $texte;
                        }
                      ?>
                    </p>
                  </div>
                </div>
              </a>

          <?php
        }
        $rep->closeCursor();

      ?>



      </div>

      <div class="next"><p><!-- > --></p></div>

    </div>

  </div>

  <br /><br /><br /><br /><br />

  <?php include("footer.php"); ?>

  <script>

    function initMap(){

      <?php

            $id = $_GET["id"];

            $compteur = 0;
            $compteurtwo = 0;
            include("./admin/connexion.php");
            $rep = $bdd->query("SELECT * FROM programmes WHERE ID = '$id'");
            while ($data = $rep->fetch()){
              $compteur++;
              $compteurtwo++;
            }
            $rep->closeCursor();

      ?>

      var locations = [

        <?php

          include("./admin/connexion.php");
          $rep = $bdd->query("SELECT * FROM programmes WHERE ID = '$id'");
          while ($data = $rep->fetch()){

            $positions = explode(",", $data["positiongps"]);
            $latitude = $positions[0];
            $longitude = $positions[1];

            if ($compteurtwo == 1){
              ?>["<?php echo $data['titre']; ?>", <?php echo $latitude; ?>, <?php echo $longitude; ?>, 4]<?php
            }
            else {
              ?>["<?php echo $data['titre']; ?>", <?php echo $latitude; ?>, <?php echo $longitude; ?>, 4],<?php
            }
            $compteurtwo--;

          }
          $rep->closeCursor();

        ?>

      ];

      var imagesDetourer = [

        <?php

            include("./admin/connexion.php");
            $rep = $bdd->query("SELECT * FROM programmes WHERE ID = '$id'");
            while ($data = $rep->fetch()){
              if ($compteur == 1){
                echo "'".$data["detoure"]."'";
              }
              else {
                echo "'".$data["detoure"]."',";
              }
              $compteur--;
            }
            $rep->closeCursor();

        ?>

      ];

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });

      var infowindow = new google.maps.InfoWindow();

      var marker, i;

      for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          icon: imagesDetourer[i],
          map: map
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }

      map.addListener("zoom_changed", function() {
        console.log("Zoom: " + map.getZoom());
      });

    }

  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD75nFLcsn06DgLjQVJRpNJNV5iNnoPuks&callback=initMap"></script>


</body>

</html>
