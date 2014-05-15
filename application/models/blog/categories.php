<?php
/**
 * File Categories.php
 *
 * PHP version 5
 *
 * @category Blog
 *
 * @package  Categories
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
 * Class Categories
 *
 * PHP version 5
 *
 * @category Blog
 *
 * @package  Categories
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 */
class Categories extends CI_Model
{
    private $_categoryTable="blog_category";

    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * This function to get Blog Category
     *
     * @return array
     */
    public function getCategories()
    {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'getCategories',
            '_id' => '0'
        );
        $query = $this->db->get($this->_categoryTable);

        if ($query->num_rows()) {
            $result['categories']=array();
            $data=array();
            foreach ($query->result() as $row) {
                $data['_id']= $row->catId;
                $data['_name']= $row->catName;
                $data['_parent']= $row->catParent;
                array_push($result['categories'], $data);
                $result['_msg']= 'Success';
            }
        } else {
            $result['_msg']= 'Error';
            $result['_function']= 'getCategories';
            $result['_id' ]= '2';
        }

        return $result;
    }
} 