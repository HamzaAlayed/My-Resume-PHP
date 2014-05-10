<?php
/**
 * File Profile.php
 *
 * PHP version 5
 *
 * @category Resume
 *
 * @package  Skills
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
 * @package  Skills
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 */
class Skills extends CI_Model
{
    private $_skills="skills";
    private $_skillType="skillTypes";
    private $_profileToSkills="profileToSkills";

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
     * @param int $_Id profile ID
     *
     * @return array
     */
    public function getUserSkills($_Id=1)
    {

        $result = array(
            '_msg' => 'Error',
            '_function' => 'getUserSkills',
            '_id' => '0'
        );

        $_profile
            =$this->db->get_where($this->_profileToSkills, array('profileId'=>$_Id));
        if ($_profile->num_rows()) {
            $_data=array();
            $result['_skills']=array();
            foreach ($_profile->result() as $row) {
                $_ids=array('skillId'=>$row->skillId);
                $_skills =$this->db->get_where($this->_skills, $_ids);
                if ($_skills->num_rows()) {

                    $_data['_id'] = $_skills->row()->skillId;
                    $_data['_title'] = $_skills->row()->skillTitel;
                    $_data['_typeId'] = $_skills->row()->skillType;
                    $_data['_value'] = $_skills->row()->skillType;
                    $_types=array('typeId'=>$row->skillId);

                    $_types =$this->db->get_where($this->_skillType, $_types);
                    if ($_types->num_rows()) {
                        $_data['_type'] = $_types->row()->typeName;
                        if (!isset($result['_skills']["_".$_data['_type']])) {
                            $result['_skills']["_".$_data['_type']]=array();
                        }
                        if (!is_array($result['_skills']["_".$_data['_type']])) {
                            $result['_skills']["_".$_data['_type']]=array();
                        }
                    } else {
                        $_data['_msgType'] = 'Error';
                        $_data['_function'] = 'getUserSkills';
                        $_data['_idType'] = '3';
                        $_data['_errorType']="Unknown Type";
                    }

                } else {
                    $_data['_msgSkill'] = 'Error';
                    $_data['_function'] = 'getUserSkills';
                    $_data['_idSkill'] = '2';
                    $_data['_errorSkill']="Cant Access To Your Skill";
                }
                array_push($result['_skills']["_".$_data['_type']], $_data);
            }
            $result['_msg'] = 'success';
        } else {
            $result['_msg'] = 'Error';
            $result['_function'] = 'getUserSkills';
            $result['_id'] = '1';
            $result['_error']="You Don't Have Any Skill";
        }


        return $result;
    }
} 