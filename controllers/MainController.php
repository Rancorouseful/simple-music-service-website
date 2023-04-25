<?php

class MainController
{
    public function actionindex() 
    {
        $template = DIR . 'views/main/index.php';
        require_once(DIR . 'views/wrapper.php');

        return true;
    }
}
