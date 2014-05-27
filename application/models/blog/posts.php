<?php
/**
 * File Posts.php
 *
 * PHP version 5
 *
 * @category Blog
 *
 * @package  Posts
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
 * Class Posts
 *
 * PHP version 5
 *
 * @category Blog
 *
 * @package  Posts
 *
 * @property Categories $Categories
 *
 * @property Tags $Tags
 *
 * @property Types $Types
 *
 * @property Comments $Comments
 *
 * @property Profile $Profile
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 */
class Posts extends CI_Model
{
    private $_postsTable="blog_posts";

    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('blog/Categories');
        $this->load->model('blog/Tags');
        $this->load->model('blog/Types');
        $this->load->model('blog/Comments');
        $this->load->model('profile');

    }

    /**
     * This function to get Blog Posts Information
     *
     * @param array $_criteria Conditions that You Looking For
     *
     * @param int   $_limit    How many post you need?
     *
     * @param int   $_offset   Start get post from row number X
     *
     * @param bool  $_fastView  Do you need whole post body?
     *
     * @return array
     */
    private function _getPosts(
        $_criteria=array(),$_limit=10,$_offset=0,$_fastView=false
    ) {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'getPosts',
            '_id' => '0'
        );
        $this->db->order_by("postDate", "desc");
        if (count($_criteria)==0) {
            $query = $this->db->get($this->_postsTable, $_limit, $_offset);
        } else {
            $query = $this->db->get_where(
                $this->_postsTable,
                $_criteria, $_limit,
                $_offset
            );
        }

        if ($query->num_rows()) {
            $result['_posts']=array();
            $data=array();
            foreach ($query->result() as $row) {
                $data['_id']= $row->
                    postId;
                $data['_title']= $row->
                    postTitle;
                $data['_date']= $this->
                    _dateFormat($row->postDate);
                $data['_body']= ($_fastView)?
                    $row->postBody:$this->_fastView($row->postBody);
                $data['_user']= $this->
                    Profile->getProfile($row->postUser);
                $data['_type']= $this->
                    Types->getTypeById($row->postType);
                $data['_tags']= $this->
                    Tags->getTagsById($row->poetTags);
                $data['_head']= $row->
                    PostTypeHead;
                $data['_published']= ($row->postIsPublished==1)?
                true:false;
                $data['_lastEdit']= $this->
                    _dateFormat($row->postLastEdit);
                $data['_category']=$this->
                    Categories->getCategoriesById($row->postCategory);
                $data['_comments']=$this->Comments->getComments(array('postId'=>$row->postId));
                $data['_commentsCount']=$this->Comments->getCommentCount(array('postId'=>$row->postId));
                array_push($result['_posts'], $data);
                $result['_msg']= 'Success';
            }
        } else {
            $result['_msg']= 'Error';
            $result['_function']= 'getPosts';
            $result['_error']= 'No Posts Found';
            $result['_id' ]= '2';
        }

        return $result;
    }

    /**
     * This function to get Blog latest Posts Information
     *
     * @param int    $_catId      Category ID
     *
     * @param int    $_typeId     Type ID
     *
     * @param int    $_limit      How many post you need
     *
     * @param int    $_offset     Start get post from row number X
     *
     * @param bool   $_fast       Do you need whole post body?
     *
     * @param string $_dateFormat Date Format
     *
     * @return array
     */
    public function getLatestPosts(
        $_catId=0,
        $_typeId=0,
        $_limit=10,
        $_offset=0,
        $_fast=false,
        $_dateFormat='M.d'
    ) {
        $_buildCriteria=array();
        if ($_catId!=0) {
            $_buildCriteria['postCategory']=$_catId;
        }
        if ($_typeId!=0) {
            $_buildCriteria['postType']=$_typeId;
        }
        $result= $this->_getPosts(
            $_buildCriteria,
            $_limit,
            $_offset,
            $_fast,
            $_dateFormat
        );

        return $result;
    }

    /**
     * Cut the Post Body String to view fast
     *
     * @param string $_body Post Body
     *
     * @return string
     */
    private function _fastView($_body='')
    {
        return substr($_body, 0, 1000);
    }

    /**
     * Date Formatter
     *
     * @param string $_date   Date For format
     *
     * @param string $_format Format look like
     *
     * @return string
     */
    private function _dateFormat($_date='',$_format='M.d')
    {
        return date($_format, strtotime($_date));
    }
} 