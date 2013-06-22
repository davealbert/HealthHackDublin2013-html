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
			$data['buttons'] = $this->data_model->head();
			$this->render_page('1button',$data);
		} else if ($value === "eye") {
			$data['buttons'] = $this->data_model->eye();
			$this->render_page('1button',$data);
		} else {
			// echo "pain";
			$data['buttons'] = $this->data_model->body();
			$this->render_page('1button',$data);
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