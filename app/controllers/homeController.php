<?php
// namespace Controller;
// use Core\Core;
class homeController extends Controller{

    public function index(){
        $data = array('amount' => 5);

       $this->loadTemplate('home', $data);

    }
}