<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Lib
{

  private $ci;

  function __construct()
  {
    // parent::__construct();
    $this->ci =& get_instance();
    $this->ci->load->library('session');
  }

  public function cekSession()
  {
    if( !$this->ci->session->userdata('user_id') ) {
      redirect('login');
    }
    exit();
  }
}


?>
