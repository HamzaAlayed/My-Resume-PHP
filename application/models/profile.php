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
 * Class CategoriesModule
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

    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        parent::__construct();
    }
} 