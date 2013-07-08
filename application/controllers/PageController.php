<?php 

class PageController extends CI_Controller{
    public function index(){
        $data['main_content'] = 'index';
        $this->load->view('template', $data);
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
