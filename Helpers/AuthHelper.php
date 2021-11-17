<?php

class AuthHelper
{

    function __construct()
    {
    }

    /*function checkLoggedIn()
    {
        session_start();
        if (isset($_SESSION["usuario"])) {
            return true;
        } else {
            return false;
        }
    }*/

    function checkLoggedIn()
    {
        session_start();
        if (isset($_SESSION["rol"]))
            $session = $_SESSION;
        else
            $session = null;
        return $session;
    }


}
