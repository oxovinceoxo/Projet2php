

<?php

if (isset($_POST['inlineCheckbox'])) {
    $multiple = $_POST['inlineCheckbox'];
    //Une boucle foreach qui contient un for = pour chaque case cochée -> affiche les valeur de 1 à 10 des tables
    foreach ($multiple as $numerotable){
        echo 'Table de : '.$numerotable . '<br>';
        for ($i = 1; $i < 11; $i++) {
            echo  $numerotable . ' x '. $i . '=' . $i * $numerotable . '<br/>';
        }
    }
}
?>
