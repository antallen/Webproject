<?php
namespace App\Views;
use kernel\View;
class loginView extends View {
    protected $twig;
    public function __construct($path){
        parent::__construct($path);
    }
    public function show($user){
        include(APP_PATH.'app/Views/header.html');
        $twig = $this->getTwig();
        foreach ($user as $value) {    
            echo $twig->render('usertable.twig.html',
                             ['id' => $value['id'],
                              'studentid' => $value['studentid'],
                              'name' => $value['name'],
                              'email' => $value['email']]);
        }
        include(APP_PATH.'app/Views/footer.html');
    }
    public function __destruct(){
    }
}