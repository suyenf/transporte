<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produccion extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }
    ////ORDENES
    
    //CREAR ORDEN
    public function crear_orden() {
        $this->load->helper('form');
        $this->load->model('produccion/orden');
        $data = array(
            'numero_orden' => $this->input->post('HOPHOP'),
            'tipo_armador' => $this->input->post('CABARC'),
            'cod_armador' => $this->input->post('AUBARC'),
            'tipo_cliente' => $this->input->post('CAARMA'),
            'cod_cliente' => $this->input->post('AUARMA'),
            'descripcion' => $this->input->post('HOPDST'),
            'fecha_inicio_estimada' => $this->input->post('HOPFIE'),
            'fecha_inicio_real' => $this->input->post('HOPFIR'),
            'fecha_fin_estimada' => $this->input->post('HOPFFE'),
            'fecha_fin_real' => $this->input->post('HOPFFR'),
            'fecha_de_creacion_obra' => $this->input->post('HOPFEP'),
            'estado' => $this->input->post('HOPSTS')
        );
        $result['dpdhopbk'] = $this->orden->crear_orden($data);
//            //ARRAY[TABLA] = CARGA EL VALOS QUE SE INGRESA EN $a USANDO UN FUNCION
//            //DE OTRO MODELO MOSTRANDO ASI LA BUSQUEDA DE LOS DATOS 
//            //print_r($result);
    $this->load->view('produccion/reg_o', $result);}
}
