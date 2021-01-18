

    <?php
    if (isset($_POST['table'])) {

        $tablede = $_POST['table'];

        for ($i = 1; $i < 11; $i++) {
            echo   $tablede . ' x '. $i . '=' . $i * $tablede . '<br/>';
        }
    }
    ?>
<p><a href="index.php">Retour</a></p>

