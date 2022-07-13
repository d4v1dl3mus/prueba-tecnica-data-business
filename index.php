<!DOCTYPE html>
<html>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Número: <input type="number" name="numero">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        if (empty($numero)) {
            echo "Por favor digite un número";
        } else {
            echo $numero."<br>";
            while ($numero != 1) :
                if ($numero % 2 == 0) {
                    $numero = $numero / 2;
                } else {
                    $numero = ($numero * 3) + 1;
                }
                echo $numero."<br>";
            endwhile;
        }
    }

    ?>

</body>

</html>