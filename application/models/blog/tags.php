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
class Tags extends CI_Model
{
    private $_tagsTable="blog_tags";

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
    public function getTags()
    {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'getTags',
            '_id' => '0'
        );
        $query = $this->db->get($this->_tagsTable);

        if ($query->num_rows()) {
            $result['_tags']=array();
            $data=array();
            foreach ($query->result() as $row) {
                $data['_id']= $row->tagId;
                $data['_name']= $row->tagName;
                array_push($result['_tags'], $data);
                $result['_msg']= 'Success';
            }
        } else {
            $result['_msg']= 'Error';
            $result['_function']= 'getTags';
            $result['_id' ]= '2';
        }

        return $result;
    }
    /**
     * Function retrieve Tag information By Id
     *
     * @param int $_id tag Id
     *
     * @return array
     */
    public function getTagsById($_id=0)
    {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'getTags',
            '_id' => '0'
        );
        if ($_id==0 || $_id=='') {
            $result['_msg']= 'Error';
            $result['_function']= 'getTagsById';
            $result['_error']='Please Select Tag Id';
            $result['_id' ]= '1';
        } else {
            $criteria=array('tagId'=>$_id);
            $query = $this->db->get_where($this->_tagsTable, $criteria);

            if ($query->num_rows()) {
                $result['_tags']=array();
                $data=array();
                foreach ($query->result() as $row) {
                    $data['_id']= $row->tagId;
                    $data['_name']= $row->tags;
                    array_push($result['_tags'], $data);
                    $result['_msg']= 'Success';
                }
            } else {
                $result['_msg']= 'Error';
                $result['_function']= 'getTagsById';
                $result['_error']='Tag not Found';
                $result['_id' ]= '2';
            }
        }
        return $result;
    }
} 