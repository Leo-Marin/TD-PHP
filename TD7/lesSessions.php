<?php

session_start();


$_SESSION1['login'] = "rlebreton";
$_SESSION1['isAdmin'] = "1";

$_SESSION2['login'] = 'lele';
$_SESSION2['isAdmin'] = "0";
$_SESSION2['note'] = [9,14,12,16,11,7];
$_SESSION2['LAST_ACTIVITY'] = time;
unset($_SESSION1['login']);


if (isset($_SESSION1['login'])) {
    echo $_SESSION1['login'];
    echo ' / ';
    echo $_SESSION1['isAdmin'];
}
else echo "la session existe po";
session_destroy();
echo $_SESSION1['isAdmin']; // verif session existe plus mais ses données si

if (isset($_SESSION2['login'])) {
    echo $_SESSION2['login'];
    echo ' / ';
    echo $_SESSION2['isAdmin'];
    echo ' / ';
    foreach ($_SESSION2['note'] as $tab){
        echo $tab;
        echo ' /';
    }
}
else echo "la session existe po";    


 if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > (30*60))) {
     // if last request was more than 30 minutes ago
     session_unset();     // unset $_SESSION variable for the run-time 
     session_destroy();   // destroy session data in storage
 } else {
     $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
 }
//unset($_SESSION['login']);
/*session_unset();     // unset $_SESSION variable for the run-time 
session_destroy();   // destroy session data in storage
// Il faut réappeler session_start() pour accéder de nouveau aux variables de session
setcookie(session_name(), '', time() - 1); // deletes the session cookie containing the session ID

*/

