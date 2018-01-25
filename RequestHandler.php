<?php

use Controller\TranslateController;


//třída spravující požadavky
class RequestHandler
{

    private $controller;

    public function __construct()
    {
        $this->controller = new TranslateController();
    }

    public function handleRequest()
    {
        if(isset($_GET["sourceWord"]) && $_GET["sourceWord"] != "")
        {
            $word = trim($_GET["sourceWord"]);
            $word = $this->controller->translate($word);
            echo $word;
        }
        else
        {
            echo "no word specified";
        }
    }
}