<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Projet 2 php</title>
</head>


<!------ exercice 1 Un fichier pour afficher la table de multiplication de 3 --------->

<body>
  <div class="container bg-primary p-3 mb-2">
    <h1 class="container ">Table de 3 </h1>

    <!---------
    <?php include("table3.php"); ?> 
   ------->

    <a href="table3.php" class="btn btn-outline-dark">Afficher la table de 3</a>

  </div>


  <!------- exercice 2	Sélectionner une table de multiplication entre 1 et 10 dans une liste déroulante ------------>

  <div class="container bg-danger p-3 mb-2">
    <h1 class="container text-success">choix table </h1>

    <form action="choixtable.php" method="POST">

      <div class="form-group">
        <label for="table">Choix du multiplicateur</label>
        <select class="form-control" name="table">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>

      <button type="submit" class="btn btn-outline-success">Résultat</button>
    </form>
  </div>

  <!------- exercice 3	Choisir la ou les table(s) de multiplication à afficher par checkboxes  ------------>


  <div class="container bg-warning p-3 mb-2">
    <h1 class="container text-info"> Afficher avec des boutons radio </h1>

    <form action="checkbox.php" method="POST">

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="inlineCheckbox[]" value="1">
        <label class="form-check-label" for="inlineCheckbox1">1</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="inlineCheckbox[]" value="2">
        <label class="form-check-label" for="inlineCheckbox2">2</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="inlineCheckbox[]" value="3">
        <label class="form-check-label" for="inlineCheckbox2">3</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="inlineCheckbox[]" value="4">
        <label class="form-check-label" for="inlineCheckbox4">4</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="inlineCheckbox[]" value="5">
        <label class="form-check-label" for="inlineCheckbox5">5</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" name="inlineCheckbox[]" value="6">
        <label class="form-check-label" for="inlineCheckbox6">6</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox7" name="inlineCheckbox[]" value="7">
        <label class="form-check-label" for="inlineCheckbox7">7</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox8" name="inlineCheckbox[]" value="8">
        <label class="form-check-label" for="inlineCheckbox8">8</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox9" name="inlineCheckbox[]" value="9">
        <label class="form-check-label" for="inlineCheckbox9">9</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox10" name="inlineCheckbox[]" value="10">
        <label class="form-check-label" for="inlineCheckbox10">10</label>
      </div>
      <div>
        <button type="submit" class="btn btn-outline-success">Résultat</button>
      </div>

    </form>

  </div>

  <!------- exercice 4	Une multiplication au hasard  ------------>

  <div class="container bg-success p-3 mb-2">
    <h1 class="container">Choix du multiplicateur</h1>

    <form action="random.php" method="post">
      <div class="form-group">
        <div class="form-group">
          <label for="reponse">Votre question :
            <?php
            $nombre1 = [1,2,3,4,5,6,7,8,9,10];
            $nombre2 = [1,2,3,4,5,6,7,8,9,10];
            $nombre1_aleatoir = array_rand($nombre1);
            $nombre2_aleatoir = array_rand($nombre2);
            
            $reponse = $nombre1_aleatoir*$nombre2_aleatoir;
            echo $nombre1_aleatoir . "x" . $nombre2_aleatoir;
            ?>

          </label>

          <input type="hidden" name="reponse" id="reponse" value= "<?php echo $reponse ?>">
          <br>
        </div>
        <div class="form-group">
          <label for="answerInput">Votre réponse</label>
          <input type="text" class="form-control" name="answerInput" id="answerInput">
        </div>
        <hr>

        <button type="submit" name="btn-result" class="btn btn-outline-primary">Valider</button>
        <hr>
      </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>




</body>

</html>