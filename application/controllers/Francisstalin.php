<?php
class Francisstalin extends CI_Controller{
public function __construct()
{
    parent::__construct();
}

public function index()
{
    $data['bienvenida']="Bienvenido soy Stalin Francis estoy en la Ingenieria de Software";
    $this->load->view('francisstalin_record',$data);
}
}

?>
