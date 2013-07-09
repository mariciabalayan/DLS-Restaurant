<?php 

class Pages extends CI_Controller{
    
    public function view( $page = 'index' ){
        if ( ! file_exists('application/views/pages/'.$page.'.php')) {
            show_404();
	}
        //add pass title or not
        $data['main_content'] = $page;
        $this->load->view('template', $data);
    }

}

?>
