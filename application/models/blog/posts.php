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
        $this->load->model('profile');
    }

    /**
     * This function to get Blog Category
     *
     * @return array
     */
    public function getPosts()
    {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'getPosts',
            '_id' => '0'
        );
        $query = $this->db->get($this->_postsTable);

        if ($query->num_rows()) {
            $result['_posts']=array();
            $data=array();
            foreach ($query->result() as $row) {
                $data['_id']= $row->
                    postId;
                $data['_title']= $row->
                    postTitle;
                $data['_date']= $row->
                    postDate;
                $data['_body']= $row->
                    postBody;
                $data['_user']= $this->
                    Profile->getProfile($row->postUser);
                $data['_type']= $this->
                    Types->getTypeById($row->postType);
                $data['_tags']= $this->
                    Tags->getTagsById($row->poetTags);
                $data['_head']= $row->
                    PostTypeHead;
                $data['_published']= $row->
                    postIsPublished;
                $data['_lastEdit']= $row->
                    postLastEdit;
                $data['_category']=$this->
                    Categories->getCategoriesById($row->postCategory);
                array_push($result['_posts'], $data);
                $result['_msg']= 'Success';
            }
        } else {
            $result['_msg']= 'Error';
            $result['_function']= 'getPosts';
            $result['_id' ]= '2';
        }

        return $result;
    }
} 