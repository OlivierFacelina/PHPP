<?php
// Tableaux des mois
$months = array(
    1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin',
    7 => 'Juillet', 8 => 'Août', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre'
);
// Tableaux des jours de la semaine
$days = array('Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim');

// Récupération du mois et de l'année depuis l'URL ou la date courante
if (isset($_GET['month']) && isset($_GET['year'])) {
    $current_month = $_GET['month'];
    $current_year = $_GET['year'];
} else {
    $current_month = date('m');
    $current_year = date('Y');
}

// Calcul du nombre de jour dans le mois et du jour de la semaine correspondant au 1er jour du mois
$nb_days = date('t', mktime(0, 0, 0, $current_month, 1, $current_year));
$start_days = date('N', mktime(0, 0, 0, $current_month, 1, $current_year));

// Calcul du jour de la semaine correspondant au dernier jour du mois
$end_days = date('N', mktime(0, 0, 0, $current_month, $nb_days, $current_year));

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Calendrier</title>
</head>

<body>
    <header>
        <h2><?= $months[$current_month] . ' ' . $current_year ?></h2>
        <form method='get' action=''>
            <label for='month'>Mois :</label>
            <select id='month' name='month'>
                <?php
                foreach ($months as $key => $value) {
                    if ($key == $current_month) { ?>
                        <option value='<?= $key ?>' selected><?= $value ?></option>
                    <?php
                    } else {
                    ?>
                        <option value='<?= $key ?>'><?= $value ?></option>
                <?php
                    }
                }
                ?>
            </select>
            <label for='year'>Année :</label>
            <input type='number' id='year' name='year' value='<?= $current_year ?>' min='1900' max='2100'>
            <input type='submit' value='Afficher'>
        </form>
    </header>
    <!-- Affichage du calendrier -->
    <main>
        <br>
        <div class="table">
            <table border=1 width="80%">
                <!-- Jours de la semaine -->
                <tr>
                    <?php foreach ($days as $day) { ?>
                        <th><?= $day ?></th>
                        <?php
                }
                ?>
            </tr>
            <tr>
                <!-- Le 1er jour du mois -->
                <?php
                for ($i = 1; $i < $start_days; $i++) { ?>
                    <td></td>
                    <?php
                }
                ?>
                <!-- Afficher tous les jours -->
                <?php
                for ($i = 1; $i <= $nb_days; $i++) {
                    if ($start_days == 8) { ?>
            </tr>
            <tr>
                <?php 
                $start_days = 1;
            } 
            ?>
                <td><?= $i ?></td>
                <?php 
                $start_days++;
            }
            ?>
            <!-- Le dernier jour du mois -->
                <?php
                for ($i = $end_days; $i < 7; $i++) { ?>
                    <td></td>
                    <?php
                }
                ?>
            </tr>
        </table>
        </div>
        <br>
    </main>
    <footer>
        <!-- Boutons pour changer de mois -->
        <?php
        $previous_month = $current_month - 1;
        $previous_year = $current_year;
        if ($previous_month == 0) {
            $previous_month = 12;
            $previous_year--;
        }
        $next_month = $current_month + 1;
        $next_year = $current_year;
        if ($next_month == 13) {
            $next_month = 1;
            $next_year++;
        } ?>
        <div class="button">
            <?= "<a href='?month=" . $previous_month . "&year=" . $previous_year . "'> &lt; Mois précédent</a> " ?>
            <?= "<a href='?month=" . $next_month . "&year=" . $next_year . "'> Mois suivant &gt;</a>" ?>
        </div>
    </footer>
</body>

</html>