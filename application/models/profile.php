<?php
/**
 * File Profile.php
 *
 * PHP version 5
 *
 * @category Resume
 *
 * @package  Profile
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
 * Class Profile
 *
 * PHP version 5
 *
 * @category Resume
 *
 * @package  Profile
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 * @property Profile $Profile
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 */
class Profile extends CI_Model
{
    private $_profileTable="profile";

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
     * This function to get user profile
     *
     * @param int $id profile ID
     *
     * @return array
     */
    public function getProfile($id=1)
    {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'getProfile',
            '_id' => '0'
        );

        $query = $this->db->get_where($this->_profileTable, array('profileId'=>$id));
        if ($query->num_rows()) {
            $result['_msg'] = 'success';
            $result['_id'] = $query->row()->profileId;
            $result['_name'] = $query->row()->profileName;
            $result['_dob'] = $query->row()->profileDob;
            $result['_address'] = $query->row()->profileAddress;
            $result['_phone'] = $query->row()->profilePhone;
            $result['_email'] = $query->row()->profileEmail;
            $result['_website'] = $query->row()->profileWebsite;
            $result['_title'] = $query->row()->profileTitle;
            $result['_about'] = $query->row()->profileAbout;
            $result['_img'] = $query->row()->profileImg;
        }
        return $result;
    }
} 