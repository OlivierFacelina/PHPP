<?php
$lastName = 'olivier';
$firstName = 'Facelina';
$yearsOld = 21;
$city = 'Amiens';
// 1. chaine guillemets simples (stringSingleQuotes)
$stringSingleQuotes = 'Bonjour je m’appelle ' .ucwords($lastName) . ' ' .strtoupper($firstName). ', j’ai ' .$yearsOld . ' ans et j’habite ' .$city .'.';

// 2.  chaine guillemets doubles (stringDoubleQuotes)
$stringDoubleQuotes = "Je suis une " . '"chaîne de caractères"' . ".";

// 3. chaine longue, écriture HereDoc (longString)
$longString = <<<EOD
                Croisant les bras, et tous s'assirent autour du foyer, rougie, rendait violâtre. 
                Avoue que je suis simplement ici pour tenir compagnie au tien et pour t'imaginer
                que tu souffres par ta faute. Élevez un étendard sur une montagne, et je serais 
                dans un extrême embarras. Voir, si touchés que je fusse un grand misérable! 
                Facile, il devait trouver le cardinal seul, sans interlocuteur, un drame invisible et
                inconnu aux autres spectateurs que nous jouions, du pauvre pygmée qui s'en 
                allait.
EOD;

// Tableaux

// 8. Notes (grades)
$marks = array(
    15,
    13,
    8,
    10,
    17
);

// 9. Matières (courses)
$subject = array(
    "HTML/CSS",
    "Algorithmique",
    "Anglais",
    "Marketing",
    "UI/UX"
);

// 11. fusion de deux tableaux (coursesGrades)
$courses = array_combine($subject, $marks);

// copie du tableau pour ne écraser l'original (revisedCoursesGrades)
$revisedCourses = [
    "HTML/CSS" => 15,
    "Algorithmique" => 13,
    "Anglais" => 8,
    "Marketing" => 10,
    "UI/UX" => 17
];

// 12. Inversion des notes d'algorithmique et de marketing
$temp = $revisedCourses["Algorithmique"];
$revisedCourses["Algorithmique"] = $revisedCourses["Marketing"];
$revisedCourses["Marketing"] = $temp;

// 13. Tableau de notes des étudiants (students)
$marksStudents = [
    'etudiant1' => [
        "HTML/CSS" => 15,
        "Algorithmique" => 3,
        "Anglais" => 17,
        "Marketing" => 9,
        "UI/UX" => 14
    ],
    'etudiant2' => [
        "HTML/CSS" => 12,
        "Algorithmique" => 17,
        "Anglais" => 8,
        "Marketing" => 10,
        "UI/UX" => 11
    ],
    'etudiant3' => [
        "HTML/CSS" => 19,
        "Algorithmique" => 13,
        "Anglais" => 2,
        "Marketing" => 15,
        "UI/UX" => 20
    ],
    'etudiant4' => [
        "HTML/CSS" => 9,
        "Algorithmique" => 4,
        "Anglais" => 7,
        "Marketing" => 1,
        "UI/UX" => 13
    ]
]
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Chaines de caractères | Tableaux</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">Training sur les chaines de caractères et les tableaux</h1>

        <div class="container">
            <div class="card-columns">
            <!-- Question 1 -->
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h2 class="card-title">Présentation 1</h2>
                        <p class="card-text">
                            <?= $stringSingleQuotes?>
                        </p>
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="card p-3">
                    <h2 class="card-title">Chaine guillemets doubles</h2>
                    <p>
                        <?= $stringDoubleQuotes?>
                    </p>
                </div>
                <!-- Question 3 -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Chaine Très longue</h2>
                        <blockquote class="blockquote mb-0">
                            <p class="card-text">
                                 <?= ucwords($longString)?>
                            </p>
                        </blockquote>
                    </div>
                </div>
                <!-- Question 4 -->
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h2 class="card-title">Présentation 2</h2>
                        <p class="card-text">
                            <!-- afficher votre réponse ici -->
                        </p>
                    </div>
                </div>
                <!-- Question 5 -->
                <div class="card">
                    <div class="card-body bg-primary text-white">
                        <h2 class="card-title">Présentation 3</h2>
                        <p class="card-text">
                             <!-- afficher votre réponse ici -->
                        </p>
                    </div>
                </div>
               
               <!-- Question 6 -->
                <div class="card bg-primary text-white text-center p-3">
                    <h2 class="card-title">Longueur d'une chaine</h2>
                    <p>Le prénom contient <?= strlen($lastName) ?> caractères.</p>
                </div>

                 <!-- Question 7 -->
                 <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h2 class="card-title">Présentation 4</h2>
                        <p class="card-text">
                            <!-- afficher votre réponse ici -->
                        </p>
                    </div>
                </div>

                <!-- Question 10 -->
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Notes / Matières</h2>
                        <p class="card-text">
                             <?= end($marks) . ' - ' . end($subject)?>
                        </p>
                    </div>
                </div>
                <!-- Question 11 -->
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Fusion Matières / Notes</h2>
                        <p class="card-text">
                            <pre>
                                <?php print_r($courses)?>
                            </pre>
                        </p>
                    </div>
                </div>

                <!-- Question 12 -->
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Correction reporting</h2>
                        <p class="card-text">
                            <!-- question 11 -->
                            <pre>
                                 <?php print_r($revisedCourses)?>
                            </pre>
                        </p>
                    </div>
                </div>
                <!-- Question 13 -->
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Notes étudiants</h2>
                        <p class="card-text">
                            <pre>
                                 <?php print_r($marksStudents)?>
                            </pre>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>