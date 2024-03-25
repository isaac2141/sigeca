<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Google\Cloud\Storage\StorageClient;

class Uploadcontroller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Carga la biblioteca de Google Cloud Storage
        require_once APPPATH . '../vendor/autoload.php';

    }

    public function index() {
        $this->load->view('upload_form');
    }

    public function do_upload() {
        // Crea una instancia de StorageClient
        $storage = new StorageClient([
            'projectId' => 'educaysoft',
            'keyFilePath' => '../credenciales/educaysoft-5410aa784b8b.json'
        ]);

        // Obtén una instancia de Bucket
        $bucket = $storage->bucket('educaysoft_bucket');

        // Define la ruta del archivo en el bucket
        $objectName = 'repositorio/' . $_FILES['userfile']['name'];

        // Sube el archivo al bucket
        $bucket->upload(
            file_get_contents($_FILES['userfile']['tmp_name']),
            ['name' => $objectName]
        );

        echo 'El archivo se ha subido correctamente.';
    }
}

