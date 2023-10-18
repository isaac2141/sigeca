<?php
class Nazarenoleidy extends CI_Controller{
public function __construct()
{
    parent::__construct();
}

public function index()
{
    $data['bienvenida']="Bienvenido soy Leidy Nazareno estoy contenta de programar Ingenieria de Software";
    $this->load->view('nazarenoleidy_record',$data);
}
}

?>
