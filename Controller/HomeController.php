<?php

namespace Controller;

use Controller\BaseController;

class HomeController extends BaseController
{
    public function home()
    {
        $this->render("acceuil.php");
    }
}
