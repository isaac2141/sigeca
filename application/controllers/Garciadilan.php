<?php
class Garciadilan extends CI_Controller{
public function __construct()
{
    parent::__construct();
}

public function index()
{
    $data['bienvenida']="----Bienvenido soy Dilan Garcia estoy en la Ingenieria de Software";
    $this->load->view('garciadilan_record',$data);
}
}

?>
