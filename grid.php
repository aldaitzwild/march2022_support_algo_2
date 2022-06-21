<?php

    $nbLines = 0;
    $nbColumns = 0;

    if(isset($_POST['nbLines']) && isset($_POST['nbColumns'])) {
        $nbLines = $_POST['nbLines'];
        $nbColumns = $_POST['nbColumns'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grid</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <form method="post">
        <input type="number" name="nbLines" placeholder="Nombre de lignes">
        <input type="number" name="nbColumns" placeholder="Nombre de colonnes">
        <input type="submit" value="Ok">
    </form>

    <table>
        <?php

        for($i = 0; $i < $nbLines; $i++)
        {
            echo '<tr>';

            for($j = 0; $j < $nbColumns; $j++) 
            {
                echo '<td></td>';
            }

            echo '</tr>';
        }

        ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>