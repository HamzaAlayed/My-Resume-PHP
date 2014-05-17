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
 * @property Profile $Profile
 *
 * @property Categories $Categories
 *
 * @property Types $Types
 *
 * @property Posts $Posts
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
        $this->load->model("Profile");
        $this->load->model('blog/Categories');
        $this->load->model('blog/Types');
        $this->load->model('blog/Posts');
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
        $_latestPosts=$this->Posts->getLatestPosts(0, 0, 10, 0, true);
        $_categories=$this->Categories->getCategories();
        $_types=$this->Types->getTypes();
        $_data=array(
            "_selectPage"=>"Blog/home",
            "_user"=>$_user,
            "_categories"=> $_categories,
            "_types"=> $_types,
            "_latestPosts"=>$_latestPosts

        );
        $this->load->view('HTMLLoader', $_data);
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */