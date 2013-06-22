<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
  // error_reporting(E_ALL);
  // inni_set('display_errors',1);

  protected $data = array();

  function __construct() {
    parent::__construct();

    $loaded = date("Y-m-d H:i:s");
    $userdata = $this->session->all_userdata();
    if (!isset($userdata['page_views'])) {
      $page_views = 1;
    } else {
      $page_views = $userdata['page_views'] + 1;
    }
    $this->session->set_userdata(array('loaded' => $loaded,  'page_views' => $page_views));

    // if ((get_class($this) != 'static_pages') && ($this->uri->segment(1) != 'unsupported-browser')) {
    //   if ($this->agent->browser() == 'Internet Explorer' and $this->agent->version() < 7) {
    //     redirect('/unsupported-browser');
    //   }
    // }
  }

  function render_page($view,$data="") {
    $this->load->view('templates/header', $data);
    $this->load->view($view, $data);
    $uri = uri_string();
    $parts = explode("/", $uri);
    array_pop($parts);
    $data['back_url'] = join("/",$parts);
    $this->load->view('templates/footer', $data);
  }

  function render_partial($partial,$data="") {
    return $this->load->view($partial,$data,true);
  }

  function render_json($json) {
    header('Content-type: application/json');
    die(json_encode($json));
  }




}
