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
		if ($value === "head") {
			$data['buttons'] = $this->data_model->head();
			$this->render_page('1button',$data);
		} else if ($value === "eye") {
			$data['update'] = TRUE;
			$data['buttons'] = $this->data_model->eye();
			$this->render_page('1button',$data);
		} else {
			// echo "pain";
			$data['buttons'] = $this->data_model->body();
			$this->render_page('1button',$data);
		}
	}
}

/* End of file MyNeeds.php */
/* Location: ./application/controllers/MyNeeds.php */