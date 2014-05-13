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
 * @property Portfolio $Portfolio
 *
 * @property Common $Common
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
        $this->load->model("Portfolio");
        $this->load->model("Common");
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
        $_user=$this->Profile->getProfile();
        $_skills=$this->Skills->getUserSkills();
        $_portfolio=$this->Portfolio->getUserPortfolios();
        $_data=array(
            "_selectPage"=>"Resume/home",
            "_user"=>$_user,
            "_skills"=>$_skills,
            "_portfolio"=>$_portfolio
        );
        $this->load->view('HTMLLoader', $_data);
    }
    /**
     * start Print Page
     *
     * @internal param array $data Array For Data to send for view
     *
     * @return void
     */
    public function printResume()
    {
        $_user=$this->Profile->getProfile();
        $_skills=$this->Skills->getUserSkills();
        $_portfolio=$this->Portfolio->getUserPortfolios();
        $_data=array(
            "_user"=>$_user,
            "_skills"=>$_skills,
            "_portfolio"=>$_portfolio
        );
        $this->load->view('Resume/print', $_data);
    }
    /**
     * Add Category To Categories Table
     *
     * @internal param array $data Array For Data to send for view
     *
     * @return void
     */
    public function contact()
    {
        $_name=$this->input->post('name');
        $_email=$this->input->post('email');
        $_body=$this->input->post('msg');
        $_subject=$_name." send you message from you resume";
        $_data=array(
            "_selectPage"=>"Resume/home",
            "_fromEmail"=>$_email,
            "_fromName"=>$_name,
            "_message"=>$_body,
            "_subject"=>$_subject
        );
        $_result= $this->Common->sendEmail(1, $_data);
        header('Content-Type: application/json');
        echo json_encode($_result);

    }
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */