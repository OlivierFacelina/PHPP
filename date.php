<?php 
date_default_timezone_set('Europe/Paris');
$dt = time();
$formatter = new IntlDateFormatter('fr_FR');
$formatter -> setPattern('EEEE Q MMMM Y') ?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Date</title> </head>
</head>

<body class=" bg-light">
    <div class="container">
        <h1 class="display-3">Manipulation de la date et l'heure</h1>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Date du jour</h2>

                <!-- 1. date du jour -->
                <p class="text-muted">Nous sommes le : 
                <?= date("d/m/y")?></p>

                <!-- 2. date du jour textuelle -->
                <p class="text-muted">Nous sommes : 
                <?= date("F j, Y, g:i a") ?></p>

                <!-- 3. L'heure courante -->
                <!-- Utilisation de la balise time (datetime prend date ISO ) -->
                <p class="text-muted">Il est : <time datetime="">
                <?= date("H:i:s");?></time></p>

                <!-- 4. date en français -->
                
                <!-- Définir la configuration locale par défaut au fr  -->
                <p class="text-muted">Nous sommes le : 
                <?= $formatter->format($dt)?></p>
                <br>
                
                <!-- 5. Timestamp courant -->
                <h2>Timestamp courant</h2>
                <p class="text-muted">Timestamp courant : 
                <?= time()?></p>
               
                <!-- 6. Calcul de date -->
                <h2>Calcul de date</h2>
                <!-- Faites vos calculs ici -->
                <p class="text-muted">Nombre de jour dépuis le debut des cours : 
                <?php 
                    $originalTime = new DateTimeImmutable("2022-09-27");
                    $targedTime = new DateTime();
                    $interval = $originalTime->diff($targedTime);
                    echo $interval->format("%a"), "\n"; 

                    /* CORRECTION 
                    $dateStartCourses = new DateTime('2022-09-27');
                    $diff = date_diff($currentDate, $dateStartCourses);
                    echo $diff->days */
                ?></p>
               
                <!-- 7. J + 25 -->
               
               <!-- Faites vos calculs ici -->
                <p class="text-muted">La date J + 25 est : 
                <?php 
                    $date = new DateTime();
                    $interval = date_interval_create_from_date_string('25 days');
                    $res = date_add($date, $interval);   
                    $format = date_format( $res, "d-m-Y H:i:s");
                    echo $format; 
                ?></p>
                
                <!-- 8. J - 15 -->
               <!-- Faites vos calculs ici -->
                <p class="text-muted">La date J - 15 est : <?php 
                $date = new DateTime();
                $interval = date_interval_create_from_date_string('15 days');
                $res = date_sub($date, $interval);   
                $format = date_format( $res, "d-m-Y H:i:s");
                echo $format; ?></p>
                <br>
                
                <!-- 9. Nb de jour dans le mois -->
                <h2>Nombre de jour dans le mois</h2>
                <p class="text-muted">Nombre de jour : 
                <?= date("t")
                // cal_days_in_month(CAL_GREGORIAN, $currentDate->format('m'))
                ?>
                </p>
                
                <!-- 10. Timestamp Epoch -->
                <h2>Timestamp du 01/01/1970 00:00</h2>
                <p class="text-muted">Timestamp : 
                <?= mktime(0, 0, 0, 1, 1, 1970);
                // echo strtotime('1970/01/01). ' - Paris';
                // echo new DateTime('1970/01/01)->settimezone ' - Paris'
                ?>
                </p>
                <hr>
               
                <!-- 11 date du timestamp -->
                <h2>Date du timestamp 1601532000</h2>
                <p class="text-muted">Date correspondante est : 
                <?php
                $timestamp = 1601532000;
                // Le format
                $format = "l d M Y à H:i:s";
                // Formatage en jour, mois, année, heure, minutes et secondes
                echo date($format, $timestamp); // -> Saturday 01 Jan 2022 à 12:30:1

                /* Correction 
                echo date('d/m/Y - h:i:s', 1601532000)
                */
                ?>
                </p>
                
                <!-- 12 calcul âge -->
                <h2>Calcul de l'âge </h2>
                 <!-- Faites vos calculs ici -->
                <p class="text-muted">L'âge de personne née 1 avril 1978 est : <?php  
                $dateNaissance = "01-04-1978";
                $aujourdhui = date("Y-m-d");
                $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
                echo $diff->format('%y').' ans'; ?> .</p>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>