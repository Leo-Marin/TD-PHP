<?php

class File {
    //put your code here
    public static function build_path($path_array) {
    // $ROOT_FOLDER (sans slash à la fin) vaut
    // "/home/ann2/votre_login/public_html/TD5" à l'IUT 
    $ROOT_FOLDER = "/home/ann2/marinl/public_html/PHP/TD-PHP/TD5";
    return $ROOT_FOLDER. '/' . join('/', $path_array);
    }


}
