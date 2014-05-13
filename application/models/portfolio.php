<?php
/**
 * File Profile.php
 *
 * PHP version 5
 *
 * @category Resume
 *
 * @package  Portfolio
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
 * Class Portfolio
 *
 * PHP version 5
 *
 * @category Resume
 *
 * @package  Portfolio
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 */
class Portfolio extends CI_Model
{
    private $_portfolios="portfolio";
    private $_tags=array();


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
     * This function to user Portfolio
     *
     * @param int $_Id profile ID
     *
     * @return array
     */
    public function getUserPortfolios($_Id=1)
    {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'getUserPortfolios',
            '_id' => '0'
        );

        $_profile
            =$this->db->get_where($this->_portfolios, array('profileId'=>$_Id));
        if ($_profile->num_rows()) {
            $_data=array();
            $result['_portfolios']=array();
            foreach ($_profile->result() as $row) {
                $_data['_id']       = $row->portfId;
                $_data['_title']    = $row->portfName;
                $_data['_link']     = $row->portfLink;
                $_data['_img']      = $row->portfImg;
                $_data['_tags']     = explode("|", $row->portfTags);
                $this->_getMainFilter($_data['_tags']);
                array_push($result['_portfolios'], $_data);
            }
            $result['_filters'] = $this->_tags;
            $result['_msg'] = 'success';

        } else {
            $result['_msg']         = 'Error';
            $result['_function']    = 'getUserPortfolios';
            $result['_id']          = '1';
            $result['_error']       ="You Don't Have Any Portfolio";
        }


        return $result;
    }


    /**
     * This function to unique tags
     *
     * @param array $_data tags array
     *
     * @return void
     */
    private function _getMainFilter($_data=array())
    {
        $_countTags=count($_data);
        for ($i=0;$i<$_countTags;$i++) {

            if (!in_array($_data[$i], $this->_tags)) {
                array_push($this->_tags, $_data[$i]);
            }
        }

    }
} 