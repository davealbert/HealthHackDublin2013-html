<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyHealth extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('data_model');
	}

	public function index() {
		$data['buttons'] = $this->data_model->myhealth();
		$this->render_page('4button',$data);
	}

	public function pain($value='') {
		if ($value === "head") {
			echo "head";
		} else if ($value === "eye") {
			echo "eye";
		} else {
			echo "pain";
		}
	}

	public function discomfort($value='') {
		echo "discomfort";
	}

	public function treatment($value='') {
		echo "treatment";
	}

	public function rest($value='') {
		echo "rest";
	}

}

/* End of file MyHealth.php */
/* Location: ./application/controllers/MyHealth.php */