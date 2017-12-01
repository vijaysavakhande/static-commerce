<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once(BASEPATH.'libraries/Email.php');
/**
 * summary
 */
class EC_Custom extends CI_Email
{
    /**
     * summary
     */
    public function __construct($config = array())
    {
        parent::__construct($config);
        print_r($config);
    }

    public function send_email(){
      echo 'send mail';
    }
}
