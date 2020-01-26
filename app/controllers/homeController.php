<?php
// namespace Controller;
// use Core\Core;
class homeController extends Controller{    

    public function index(){
        $anuncios = new Anuncios();
        $usuarios = new Usuarios();

        $data = array(
            'amount' => $anuncios->getQuantidade(),
            'nome' => $usuarios->getNome()
        );

       $this->loadTemplate('home', $data);

    }
}