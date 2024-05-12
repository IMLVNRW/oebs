<?php 

require_once("config/config.php");

require_once("logic/db/oe_dbconection.php");
require_once("logic/db/oe_dbtable_user.php");

function redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

function user_check_login() {
    if(is_null($_SESSION['oeb_userid']))
        return false; //redirect("login.php", false);
}
function user_cheack_login($username, $passwd) {
    $db = new db_connection();
    $users = new db_table_user($db);

    $ext = $users->select(" `u_name` = '{$username}' AND u_hash = '{$passwd}'");
   
    if(count($ext) >= 0)  {
        $ext[0]->set_last_login();
        $_SESSION['oeb_userid'] = $ext[0]->get_id();
        $_SESSION["oeb_login"] = true;

        return true;
    }
    
    
    return false;
}

function oe_session_destroy() {
    session_destroy();
}



?>