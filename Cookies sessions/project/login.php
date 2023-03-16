<?php

session_start();
require('function.php');
login();
$theme = manage_user_pref();

?>
<!DOCTYPE html>
<html lang="fr" class="<?= htmlspecialchars(($theme ?? '')); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100vh;
        }
    </style>
</head>

<body class="dark:bg-black dark:bg-opacity-70 bg-gray-100 flex flex-col">
    <header class="flex-grow-0 flex items-center text-white dark:bg-transparent">
        <a class="text-black ml-4 btn text-white hover:bg-yellow-600 bg-yellow-500 shadow-xl" href="index.php">Retour</a>
        <nav class="ml-auto grid grid-cols-3 gap-6 justify-items-end p-2">
            <form class="" action="" method="POST">
                <div class="dark:text-white flex">
                    <button class="py-2 px-4 font-bold bg-gray-400 text-gray-800" name="light" type="submit"><i class="fas fa-sun"></i></button>
                    <button class="py-2 px-4 font-bold bg-gray-800" name="dark" type="submit"><i class="fas fa-moon"></i></button>
                </div>
            </form>
        </nav>
    </header>
    <main class="flex-grow">
        <section class="md:w-1/4 mx-auto md:mt-20 p-3 bg-gray-300 dark:bg-gray-600 dark:text-gray-50 shadow-lg">
            <h1 class="text-4xl mb-4">Connexion</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label dark:text-gray-50" for="login">Login</label>
                    <input class="form-control focus:shadow-outline dark:text-gray-50" type="text" name="login">
                </div>
                <div class="mb-3">
                    <label class="form-label dark:text-gray-50" for="password">Mot de passe</label>
                    <input class="form-control focus:shadow-outline dark:text-gray-50" name="password" type="password">
                </div>
                <div class="mb-3">
                    <?php if (!isset($_SESSION['user'])): ?>    
                    <button class="px-8 py-4 bg-blue-500 hover:bg-blue-600 text-white shadow rounded" type="submit" name="connect">Se connecter</button>
                    <?php else: ?>
                        <button class="px-8 py-4 bg-blue-500 hover:bg-blue-600 text-white shadow rounded" type="submit" name="connect">Se déconnecter</button>
                    <?php endif; ?>
                </div>
            </form>
        </section>
    </main>
</body>

</html>