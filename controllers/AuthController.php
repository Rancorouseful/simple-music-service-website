<?php

class AuthController
{
    public function actionindex() 
    {
        $template = DIR . 'views/auth/index.php';
        require_once(DIR . 'views/wrapper.php');

        return true;
    }
}
