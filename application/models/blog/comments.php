<?php
/**
 * File Comments.php
 *
 * PHP version 5
 *
 * @category Blog
 *
 * @package  Comments
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
 * Class Comments
 *
 * PHP version 5
 *
 * @category Blog
 *
 * @package  Comments
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 */
class Comments extends CI_Model
{
    private $_commentsTable="blog_comments";

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
     * This function to get Posts Comments
     *
     * @param array $_criteria
     * @param int $_limit
     * @param int $_offset
     * @return array
     */
    public function getComments(
        $_criteria=array(),$_limit=10,$_offset=0
    ) {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'getComments',
            '_id' => '0'
        );
        $this->db->order_by("commentDate", "desc");
        if (count($_criteria)==0) {
            $query = $this->db->get($this->_commentsTable, $_limit, $_offset);
        } else {
            $query = $this->db->get_where(
                $this->_commentsTable,
                $_criteria, $_limit,
                $_offset
            );
        }
        if ($query->num_rows()) {
            $result['_comments']=array();
            $data=array();
            foreach ($query->result() as $row) {
                $data['_id']= $row->commentId;
                $data['_name']= $row->commentName;
                $data['_email']= $row->commentEmail;
                $data['_body']= $row->commentBody;
                $data['_reply']= $row->commentReply;
                $data['_post']= $row->postId;
                $data['_date']= $row->commentDate;
                array_push($result['_comments'], $data);
                $result['_msg']= 'Success';
            }
        } else {
            $result['_msg']= 'Error';
            $result['_function']= 'getComments';
            $result['_id' ]= '2';
        }

        return $result;
    }

    /**
     * Function get unique Comment Count
     *
     * @param array $_criteria
     * @return array
     */
    public function getCommentCount($_criteria=array())
    {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'getCommentCount',
            '_id' => '0'
        );
        if (count($_criteria)==0) {
            $query = $this->db->count_all_results($this->_commentsTable);
            $result['_msg']= 'Success';
            $result['_count']= $query;
        } else {
            $this->db->select("count(*) as counter");
            $this->db->from( $this->_commentsTable);
            $this->db->where($_criteria);
            $query =$this->db->get();
            $result['_msg']= 'Success '.$this->db->last_query();
            $result['_count']= $query->row()->counter;
        }

        return $result;
    }
} 