<?php
namespace miniframework\App\Controller;

use miniframework\App\Model\Modell;
use miniframework\App\Core\View;
class HomeController{
    public $header;
    public function __construct(){
        $this->header = new Modell();
    }
    public function index(){
       View::render('User/body', $this->header->all());
         
}
}
