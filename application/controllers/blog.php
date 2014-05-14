<?php
/**
 * File categoriesmodule.php
 *
 * PHP version 5
 *
 * @category Resume
 *
 * @package  Blog
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 */

 ( ! defined('BASEPATH'))?
    exit("No direct script access allowed"):"";


/**
 * Class CategoriesModule
 *
 * PHP version 5
 *
 * @category Resume
 *
 * @package  Blog
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 */
class Blog extends CI_Controller
{

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }

    /**
     * start Home Page
     *
     * @internal param array $data Array For Data to send for view
     *
     * @return void
     */
    public function index()
    {

        $_data=array(
            "_selectPage"=>"Blog/home",

        );
        $this->load->view('HTMLLoader', $_data);
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */