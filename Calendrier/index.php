<?php 
    $month = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
    $days = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"
  ></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

<?php
// Définir la timezone
date_default_timezone_set('Europe/Paris');
$currentDate = new DateTime();
// Récupérer le mois et l'année en cours
$month = $currentDate->format('m');
$year = $currentDate->format('Y');
$monthLetter = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
$yearSelect = ['2023','2022','2021','2020','2019','2018','2017','2016','2015','2014','2013'];

// Déterminer le nombre de jours dans le mois en cours
$days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// Créer une table pour le calendrier
echo '
        <h1 class="title">' . date('F Y') . '</h1>
    ';
?>

<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
    <select name="pets" id="pet-select">
        <?php for($i=0; $i < count($monthLetter);$i++){?>
            <option value="<?= $monthLetter[$i] ?>"><?= $monthLetter[$i] ?></option>
            <?php } ?>
    </select>
    <select name="pets" id="pet-select">
        <?php for($i=0; $i < count($yearSelect);$i++){?>
            <option value="<?= $yearSelect[$i] ?>"><?= $yearSelect[$i] ?></option>
            <?php } ?>
    </select>
    <button type="submit" name="submit">Valider</button>
</form>
<?php
		// if(isset($_POST['submit'])) {
		// 	$date = $_POST['date'];
		// 	echo "La date que vous avez saisie est : " . $date . "<br>";
		// 	$timestamp = strtotime($date);
		// 	$jourSemaine = date('l', $timestamp);
		// 	$jourMois = date('j', $timestamp);
		// 	$mois = date('F', $timestamp);
		// 	$annee = date('Y', $timestamp);
		// 	echo "Cette date correspond au " . $jourSemaine . " " . $jourMois . " " . $mois . " " . $annee . ".";
		// }
	?>

<?php
echo '<table width="80%" border=1>';
echo '<tr>
        <th>Lundi</th>
        <th>Mardi</th>
        <th>Mercredi</th>
        <th>Jeudi</th>
        <th>Vendredi</th>
        <th>Samedi</th>
        <th>Dimanche</th>
    </tr>';

// Commencer la première ligne
echo '<tr>';

// Déterminer le jour de la semaine pour le premier jour du mois
$first_day_of_month = date('N', strtotime("$year-$month-01"));

// Ajouter des cellules vides jusqu'au premier jour du mois
for ($i = 1; $i < $first_day_of_month; $i++) {
    echo '<td></td>';
}

// Boucler pour ajouter les jours du mois
for ($day = 1; $day <= $days_in_month; $day++) {
    // Déterminer le jour de la semaine pour ce jour
    $day_of_week = date('N', strtotime("$year-$month-$day"));

    // Commencer une nouvelle ligne au début de la semaine (lundi)
    if ($day_of_week == 1) {
        echo '</tr><tr>';
    }

    // Ajouter le jour
    echo '<td>' . $day . '</td>';
}

// Ajouter des cellules vides jusqu'à la fin de la semaine (dimanche)
for ($i = $day_of_week; $i < 7; $i++) {
    echo '<td></td>';
}

// Fermer la dernière ligne et la table
echo '</tr>';
echo '</table>';
?>

</body>
</html>