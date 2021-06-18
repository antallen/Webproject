<?php

namespace App\Views;

use kernel\View;

class indexView extends View {

    public function __construct(){
    }

    public function show($user){
        print "Hello, ".$user;
    }

    public function __destruct(){
    }
}