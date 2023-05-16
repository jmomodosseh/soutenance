<?php

$params = explode('/', $_GET['p']);
$profile = "directeur";
$default_resource = "connexion";
$default_action = "index";

$default_action_folder = "app/" . $profile . "/" . $default_resource . "/" . $default_action . ".php";

if (isset($_GET['p']) && !empty($_GET['p'])) {

    $resource = (isset($params[1]) && !empty($params[1])) ? $params[1] : $default_resource;

    $action = (isset($params[2]) && !empty($params[2])) ? $params[2] : $default_action;

    $action_folder = "app/" . $profile . "/" . $resource . "/" . $action . ".php";

    if (file_exists($action_folder)) {

        require_once $action_folder;

    } else {

        require_once $default_action_folder;

    }

} else {
    
    require_once $default_action_folder;
}