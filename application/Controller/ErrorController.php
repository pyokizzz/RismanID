<?php

namespace RismanID\Controller;

class ErrorController
{
    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/error/index.php';
        require APP . 'view/_templates/footer.php';
    }
}
