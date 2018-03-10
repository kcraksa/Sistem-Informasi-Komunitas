<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('lib');
    $this->lib->cekSession();
  }

  public function index()
  {
    $this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('testcontent');
		$this->load->view('template/footer');
  }

}

/* End of file Home_admin.php */
/* Location: ./application/controllers/Home_admin.php */
