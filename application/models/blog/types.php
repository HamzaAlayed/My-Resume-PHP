<?php
/**
 * File Types.php
 *
 * PHP version 5
 *
 * @category Blog
 *
 * @package  Types
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
 * Class Types
 *
 * PHP version 5
 *
 * @category Blog
 *
 * @package  Types
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 */
class Types extends CI_Model
{
    private $_typesTable="blog_types";

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
    public function getTypes()
    {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'getTypes',
            '_id' => '0'
        );
        $query = $this->db->get($this->_typesTable);

        if ($query->num_rows()) {
            $result['_types']=array();
            $data=array();
            foreach ($query->result() as $row) {
                $data['_id']= $row->typeId;
                $data['_name']= $row->typeName;
                array_push($result['_types'], $data);
                $result['_msg']= 'Success';
            }
        } else {
            $result['_msg']= 'Error';
            $result['_function']= 'getTypes';
            $result['_id' ]= '2';
        }

        return $result;
    }
} 