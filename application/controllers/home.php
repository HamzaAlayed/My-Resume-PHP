<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }
    public function index()
    {
        $data=array(
            "selectPage"=>"Resume/home"
        );
        $this->load->view('HTMLLoader',$data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */