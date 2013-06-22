<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyNeeds extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('data_model');
	}

	public function index() {
		$data['buttons'] = $this->data_model->myneeds();
		$this->render_page('4button',$data);
	}

	public function self($value='') {
		echo "self";
	}

	public function environment($value='') {
		echo "environment";
	}

	public function family($value='') {
		echo "family";
	}

	public function pain($value='') {
		echo "pain";
	}

}

/* End of file MyNeeds.php */
/* Location: ./application/controllers/MyNeeds.php */