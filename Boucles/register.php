<?php
// récupération des données du cvs dans un tableau php;
$csvData = array_map('str_getcsv', file('assets/departments_regions_france_2016.csv'));
// suppression de la ligne d'entête du tableau
$deps_regions = array_slice($csvData, 1);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Département Région de France</title>
    <style>
        .container {
            margin-top: 50vh;
            transform: translateY(-50%);
        }
        body {
            background: url('./assets/img/25101.jpg') left center / cover no-repeat;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center h3">Formulaire d'inscription</h1>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="" class="d-flex flex-column">
                    <label for="lastname" class="mt-3">Nom :<br>
                    <input type="text" id="lastname" name="lastname" class="w-100 mt-3" placeholder="Saisir votre nom...">
                    <label for="birthdate" class="mt-3">Date de naissance :<br>
                    <input type="date" id="birthdate" name="birthdate" class="w-100 mt-3">
                    <label for="department" class="mt-3">Département :<br>
                    <select name="department" class="w-100 mt-3">Département de résidence :
                        <?php 
                        $i = 1;
                        foreach ($csvData as $department) {
                            echo("<option value=\"value$i\">" . $department[1] . "</option>");
                            $i++;
                        }
                        ?>
                    </select>
                    <label for="department" class="mt-3">Région :<br>
                    <select name="region" class="w-100 mt-3">Région de résidence :
                    <?php 
                        $i = 1;
                        foreach ($csvData as $region) {
                            print_r("<option value=\"value$i\">" . $region[3] . "</option>");
                            $i++;
                        }
                        ?>
                    </select>
                        <button type="submit" class="btn-info w-50 mt-3 justify-center">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>