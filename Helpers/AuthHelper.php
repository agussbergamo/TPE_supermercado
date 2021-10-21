<?php

class AuthHelper
{

    function __construct()
    {
    }

    function checkLoggedIn()
    {
        session_start();
        if (isset($_SESSION["usuario"])) {
            return true;  
        } else {
            return false; 
        }
    }

}
