<?php
//Reponse du joueur
if(isset($_POST['answerInput'])){
    $answerInput = $_POST['answerInput'];
}
// reponse input
if(isset($_POST['reponse'])){
    $reponse = $_POST['reponse'];
}
//bonne ou mauvaise réponse
if($answerInput == $reponse){
    echo "<p class='alert-success'>Bonne réponse !</p>";
}else{
    echo "<p class='alert-danger'>Mauvaise réponse !</p>";
}
?>

<a href="index.php">Retour</a>
