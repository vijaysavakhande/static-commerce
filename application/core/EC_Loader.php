<?php


 class EC_Loader extends CI_Loader{

    public function _construct(){
        parent::_construct();
        echo 'asdf';
	}
    /**
     * For frontend loading files
     * @param [type] $template
     * @param array $data
     */ 
    public function render($template = null, $data = array()){
        $this->view('default/header',$data);
        $this->view($template, $data);
        $this->view('default/footer',$data);
    }
    /**
     * For admin section loading files
     * @param [type] $template
     * @param array $data
     * @return void
     */
    public function execute($template = null, $data = array()){
        $this->view('default/admin/header',$data);
        $this->view($template, $data);
        $this->view('default/admin/footer',$data);
    }
 }
 