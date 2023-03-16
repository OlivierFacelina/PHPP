<?php 
function login() {
    require('data.php');
    if(!empty($_POST) && isset($_POST['connect'])) {
        $login = filter_var($_POST['login'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = filter_var($_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        foreach($users as $userId => $info) {
            if($info['login'] == $login && $info['password'] == $password) {
                $_SESSION['user'] = $userId;
                var_dump($_POST);
                header('Location: index.php');
                exit();
            }
        }
    }
}
function manage_user_pref() {
    $key = $_SESSION['user'] ?? 0;
    $theme = $_COOKIE["user_choice"][$key] ?? 'light';
    if(!empty($_POST)) {
        $user = $_SESSION['user'] ?? null;
        $user_choice = $_POST['dark'] ?? 'light';
        $user_choice = filter_var($user_choice,FILTER_SANITIZE_SPECIAL_CHARS);
        if(!is_null($user)) {
            setcookie("user_choice[$user]",$user_choice,strtotime("1week"));
        } else {
            setcookie("user_choice[0]",$user_choice);
        }
        $theme = $user_choice;
    } 
    return $theme;
} 