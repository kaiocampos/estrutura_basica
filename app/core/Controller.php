<?php
class Controller{

    public function loadView($viewName, $viewData = array())
    {
        // a EXTRACT Transforma as chaves de um array em variáveis e seus valores em valores da variável 
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
    public function loadTemplate($viewName, $viewData = array())
    {
        require 'views/template.php';
    }
    public function loadViewInTemplate($viewName, $viewData = array())
    {
        // a EXTRACT Transforma as chaves de um array em variáveis e seus valores em valores da variável 
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
}