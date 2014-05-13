<?php
/**
 * File Profile.php
 *
 * PHP version 5
 *
 * @category Resume
 *
 * @package  Common
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
 * Class Skills
 *
 * PHP version 5
 *
 * @category Resume
 *
 * @package  Common
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 */
class Common extends CI_Model
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
        $this->load->library('email');
    }

    /**
     * This function to get user profile
     *
     * @param int   $_Id   profile ID
     *
     * @param array $_data Email Information
     *
     * @return array
     */
    public function sendEmail($_Id=1,$_data=array())
    {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'sendEmail',
            '_id' => '0'
        );
        $query
            = $this->db->get_where($this->_profileTable, array('profileId'=>$_Id));

        if ($query->num_rows()) {
            $_email=$query->row()->profileEmail;


            $this->email->from($_data['_fromEmail'], $_data['_fromName']);
            $this->email->to($_email);

            $this->email->subject($_data['_subject']);
            $this->email->message($_data['_message']);

            $_isSent=$this->email->send();

            $result['msg']= (!$_isSent)?'Error':'success';
            $result['_function']= 'sendEmail';
            $result['_id' ]= '1';
        } else {
            $result['_msg']= 'Error';
            $result['_function']= 'sendEmail';
            $result['_id' ]= '2';
        }

        return $result;
    }
} 