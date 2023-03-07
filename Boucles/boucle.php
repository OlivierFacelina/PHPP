<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Échiquier</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
        <div class="board">
            <?php
                // $value = 0;
                // for ($col = 0; $col < 8; $col++) {
                //     $value = $col;
                //     for ($row = 0; $row < 8; $row++) {
                //         if ($value % 2 == 0) {
                //             echo "<div class=\"black_tile\">" . "</div>";
                //             $value++;
                //         }
                //         else {
                //             echo "<div class=\"white_tile\">" . "</div>";
                //             $value++;
                //         }
                //     }
                // }

                for ($rows=0; $rows < 8; $rows++) { 
                    for ($cols=0; $cols < 8; $cols++) { ?>
                        <div class="<?= ($rows + $cols) % 2 === 0 ? 'black_tile' : 'white_tile' ?>"></div>
                    <?php }
                }
            ?>
        </div>
</body>

</html>