<?php


class Core{
    
    public function start(){

        $url = '/';
        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }
        
        // criando um array vazio para não ter que por ele em condicionais
        $params = array();

        if (!empty($url) &&  $url != '/')  {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0].'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            }else{
                $currentAction = 'index';
            }

            if (count($url) > 0) {
                $params = $url;
            }

        }else{
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        $controller = new $currentController();
        /* função para executar uma function dentro de uma classe, sem saber a funciton exata
        * tem que passar dois argumentos, o primeiro e um array, e o segundo a funciton ou no nosso caso os parametros
        * o primeiro item do array e a classe que queremos executar, o segundo e o metodo dentro dessa classe.
        */
        
        call_user_func_array(array($controller, $currentAction), $params);
    }
}