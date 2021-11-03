<?php
require_once "View/CommView.php";
require_once "Helpers/AuthHelper.php";

class CommController
{
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->view = new CommView();
        $this->authHelper = new AuthHelper();
    }

    function showCommentsCSR()
    {
        //$logged = $this->authHelper->checkLoggedIn();
        $this->view->showCommentsCSR();
    }

}