<?php

namespace App\Controllers;

use kernel\Controller;
use App\Models\indexModel;
use App\Views\indexView;

class IndexController extends Controller {

    public function run(){
        $username = new indexModel();
        $result = $username->printName();
        $view = new indexView();
        $view->show($result);
    }
}