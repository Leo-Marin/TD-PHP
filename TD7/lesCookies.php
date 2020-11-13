<?php
$tab = [0,1,2,3];
$tab_txt = serialize($tab);
setcookie("TestCookie", "OK", time() + 3600);  /* expire dans 1 heure = 3600 secondes */
setcookie("TestCookieTab", $tab_txt, time() + 3600);  /* expire dans 1 heure = 3600 secondes */
$tab_recup = unserialize($tab_txt);

echo $_COOKIE["TestCookie"];

foreach ($tab_recup as $nb)
    echo $nb;
//setcookie ("TestCookie", "", time() - 1);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
