<?php
/**
 * File categoriesmodule.php
 *
 * PHP version 5
 *
 * @category Resume
 *
 * @package  Home
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
 * @package  Home
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 * @property Profile $Profile
 *
 * @property Skills $Skills
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 */
class Home extends CI_Controller
{

    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("Profile");
        $this->load->model("Skills");
    }

    /**
     * Add Category To Categories Table
     *
     * @internal param array $data Array For Data to send for view
     *
     * @return void
     */
    public function index()
    {
        $_user=$this->Profile->getProfile();
        $_skills=$this->Skills->getUserSkills();
        $_data=array(
            "_selectPage"=>"Resume/home",
            "_user"=>$_user,
            "_skills"=>$_skills
        );
        $this->load->view('HTMLLoader', $_data);
    }
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */