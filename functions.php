<?php 

require_once('classes/Login.php');

function redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

function user_cheack_login($user, $pass) {
    
    $auth = new Login();

    $statemant = $auth->login($user, $pass );

    if($statemant['status']  == "success") {
        $errorMessage = "OK";
        $_SESSION['userid'] = $statemant['id'];
        redirect('secure.php', false);
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
    return $errorMessage;
}


?>