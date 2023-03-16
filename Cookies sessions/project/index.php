<?php
// $theme = isset($_POST['dark']) ? 'dark' : 'light';
$theme = $_COOKIE["user_choice"] ?? 'light';

if(!empty($_POST)) {
    // var_dump($_POST);
    $user_choice = $_POST['dark'] ?? 'light';
    $user_choice = filter_var($user_choice,FILTER_SANITIZE_SPECIAL_CHARS);
    setcookie("user_choice",$user_choice);
    $theme = $user_choice;
} 
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
</head>

<body class="grid grid-areas-layout grid-cols-layout grid-rows-layout h-screen bg-gray-100 dark:bg-black dark:bg-opacity-70">
    <header class="grid-in-header grid justify-items-end p-2  text-white dark:bg-transparent">
        <nav class="grid grid-cols-2 gap-6 justify-items-end p-2">
            <form class="" action="" method="POST">
                <div class="dark:text-white flex">
                    <button class="py-2 px-4 font-bold bg-gray-400 text-gray-800" name="light" type="submit" value="light"><i class="fas fa-sun"></i></button>
                    <button class="py-2 px-4 font-bold bg-gray-800" name="dark" type="submit" value="dark"><i class="fas fa-moon"></i></button>
                </div>
            </form>
            <a href="login.php" class="btn border-green-500 bg-green-500 hover:bg-green-700 hover:font-semibold">Se connecter</a>
        </nav>
    </header>
    <main class="grid-in-main px-8 py-8">
        <div class="container grid grid-cols-1 gap-5 dark:text-white">
            <div class="card-group h-2/5 grid sm:grid-cols-4 gap-3">
                <div class="card shadow-lg rounded-3xl">
                    <img class="max-w-full rounded-3xl h-full object-cover" src="https://images.unsplash.com/photo-1484755560615-a4c64e778a6c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1280&q=80" alt="">
                </div>
                <div class="card shadow-lg rounded-3xl">
                    <img class="max-w-full rounded-3xl h-full object-cover" src="https://images.unsplash.com/photo-1610737241336-371badac3b66?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="">
                </div>
                <div class="card shadow-lg rounded-3xl">
                    <img class="max-w-full rounded-3xl h-full object-cover" src="https://images.unsplash.com/photo-1436831135709-48bdc150cce5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
                </div>
                <div class="card shadow-lg rounded-3xl">
                    <img class="max-w-full rounded-3xl h-full object-cover" src="https://images.unsplash.com/photo-1518609878373-06d740f60d8b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80" alt="">
                </div>
            </div>
            <div id="tracks" class="flex flex-col md:flex-row">
                <div class="md:w-1/5 grid content-start gap-1 grid-cols-2 md:grid-cols-3 auto-cols-max" id="genders">
                    <h1 class="col-span-full text-2xl mb-3">Genres</h1>
                    <a class="btn flex items-center justify-center bg-gray-600" href="">classic</a>
                    <a class="btn flex items-center justify-center bg-gray-600" href="">House</a>
                    <a class="btn flex items-center justify-center bg-gray-600" href="">Minimal</a>
                    <a class="btn flex items-center justify-center bg-gray-600" href="">Hip Hop</a>
                    <a class="btn flex items-center justify-center bg-gray-600" href="">Electronic</a>
                    <a class="btn flex items-center justify-center bg-gray-600" href="">Blues</a>
                    <a class="btn flex items-center justify-center bg-gray-600" href="">Chillout</a>
                    <a class="btn flex items-center justify-center bg-gray-600" href="">Country</a>
                    <a class="btn flex items-center justify-center bg-gray-600" href="">Techno</a>
                </div>
                <div class="flex-grow grid md:px-8 content-start" id="week">
                    <h1 class="col-span-full text-2xl mb-3">Nouveautés de la semaine</h1>
                    <ul>
                        <li class="flex justify-between mb-3 py-2 border-b border-gray-400">
                            <div class="left flex space-x-4">
                                <div class="poster w-16 h-16">
                                    <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1584679109597-c656b19974c9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="">
                                </div>
                                <div class="title">
                                    <h2 class="capitalize">leon bridge</h2>
                                    <p class="font-light">Coming home</p>
                                </div>
                            </div>
                            <div class="right flex space-x-4 justify-between items-center">
                                <p class="size"><i class="fas fa-headphones-alt text-xl"></i> 290k</p>
                                <p class="controls"><i class="far fa-play-circle text-xl"></i></p>
                            </div>
                        </li>
                        <li class="flex justify-between  mb-3 py-2 border-b border-gray-400">
                            <div class="left flex space-x-4">
                                <div class="poster w-16 h-16">
                                    <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1584679109594-56fffe50d527?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1402&q=80" alt="">
                                </div>
                                <div class="title">
                                    <h2 class="capitalize">dr dre</h2>
                                    <p class="font-light">The chronic (intro)</p>
                                </div>
                            </div>
                            <div class="right flex space-x-4 justify-between items-center">
                                <p class="size"><i class="fas fa-headphones-alt text-xl"></i> 250k</p>
                                <p class="controls"><i class="far fa-play-circle text-xl"></i></p>
                            </div>
                        </li>
                        <li class="flex justify-between  mb-3 py-2 border-b border-gray-400">
                            <div class="left flex space-x-4">
                                <div class="poster w-16 h-16">
                                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/3769099/pexels-photo-3769099.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                                </div>
                                <div class="title">
                                    <h2 class="capitalize">Mixtape</h2>
                                    <p class="font-light">I'm ok</p>
                                </div>
                            </div>
                            <div class="right flex space-x-4 justify-between items-center">
                                <p class="size"><i class="fas fa-headphones-alt text-xl"></i> 300k</p>
                                <p class="controls"><i class="far fa-play-circle text-xl"></i></p>
                            </div>
                        </li>
                        <li class="flex justify-between  mb-3 py-2 border-b border-gray-400">
                            <div class="left flex space-x-4">
                                <div class="poster w-16 h-16">
                                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/1482476/pexels-photo-1482476.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                                </div>
                                <div class="title ">
                                    <h2 class="capitalize">Mr X</h2>
                                    <p class="font-light">Nice song</p>
                                </div>
                            </div>
                            <div class="right flex space-x-4 justify-between items-center">
                                <p class="size"><i class="fas fa-headphones-alt text-xl"></i> 230k</p>
                                <p class="controls"><i class="far fa-play-circle text-xl"></i></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/5 flex flex-col content-start" id="recent">
                    <h1 class="col-span-full text-2xl mb-3">Albums</h1>
                    <div class="albums flex-grow grid grid-cols-2 grid-rows-2 gap-4">
                        <p>
                            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1497032205916-ac775f0649ae?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
                        </p>
                        <p>
                            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1499415479124-43c32433a620?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80" alt="">
                        </p>
                        <p>
                            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1504343439004-591f4b611a9d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OTN8fG11c2ljJTIwYmFja2dyb3VuZHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                        </p>
                        <p>
                            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1513829596324-4bb2800c5efb?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80" alt="">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <aside class="grid-in-nav pt-4 bg-gray-300 text-black dark:text-white dark:bg-black dark:bg-opacity-95">
        <div class="flex flex-col items-center h-1/2">
            <a href="" class="nav-brand text-2xl"><i class="fab fa-soundcloud"></i></a>
            <nav class="flex-grow">
                <ul role="navigation" class="flex h-full flex-col justify-around items-center text-xl dark:text-white">
                    <li><a href=""><i class="fas fa-home"></i></a></li>
                    <li><a href=""><i class="fas fa-compass"></i></a></li>
                    <li><a href=""><i class="fas fa-microphone"></i></a></li>
                </ul>
            </nav>
        </div>
    </aside>
    <footer class="grid-in-footer flex justify-between pl-1 pr-4 py-2 bg-gray-300 text-black dark:text-white dark:bg-black dark:bg-opacity-95">
        <div class="left flex w-1/5 space-x-4">
            <div class="poster w-16 h-16">
                <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1584679109594-56fffe50d527?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1402&q=80" alt="">
            </div>
            <div class="title">
                <h2 class="capitalize">dr dre</h2>
                <p class="font-light">The chronic (intro)</p>
            </div>
        </div>
        <div class="right flex-grow flex space-x-4 justify-between items-center">
            <div class="controls w-1/5 flex space-x-4 justify-center items-center">
                <i class="fas fa-backward text-xl"></i>
                <i class="far fa-pause-circle text-5xl"></i>
                <i class="fas fa-forward text-xl"></i>
            </div>
            <div class="track-wrapper flex-grow">
                <p class="flex justify-between items-center space-x-3">
                    <span>2:50</span>
                    <span class="flex-grow relative">
                        <span class="h-full block border-gray-800 w-2/3 absolute top-1/2 left-0 -translate-x-1/2 -translate-y-1/2 border bg-gray-500 col-start-1 col-span-3"></span>
                        <span class="h-full border block w-1/3 absolute top-1/2 right-0 -translate-x-1/2 -translate-y-1/2 bg-black col-start-3 col-span-3"></span>
                    </span>
                    <span>3:80</span>
                </p>
            </div>
            <div class="flex justify-between items-center space-x-3 w-1/6">
                <i class="fas fa-volume-up text-xl"></i>
                <span class="flex-grow relative">
                    <span class="h-full block border-gray-800 w-2/3 absolute top-1/2 left-0 -translate-x-1/2 -translate-y-1/2 border bg-gray-500 col-start-1 col-span-3"></span>
                    <span class="h-full border block w-1/3 absolute top-1/2 right-0 -translate-x-1/2 -translate-y-1/2 bg-black col-start-3 col-span-3"></span>
                </span>
            </div>
        </div>
    </footer>
</body>

</html>