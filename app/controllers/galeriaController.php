<?php 
class galeriaController extends Controller{

    public function index()
    {
        $data = array(
            'quantity' => 129
        );

        $this->loadTemplate('galeria', $data);
    }
}