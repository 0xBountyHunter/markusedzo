<?php
    session_start();
    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = "hu";
    } else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "hu") {
            $_SESSION['lang'] = "hu";
        } else {
            $_SESSION['lang'] = "en";
        }
    }

    require_once "languages/" . $_SESSION['lang'] . ".php";
?>