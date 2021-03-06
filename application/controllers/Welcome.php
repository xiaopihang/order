<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $this->load->model('pre_list');
	    $list = $this->pre_list->get_list();
		$this->load->view('welcome_message');
	}
    public function order()
    {
        $this->load->model('pre_list');
        $table_id = $_SERVER['REMOTE_ADDR'];
        $food_id = (int)$this->uri->segment(3);
        $this->pre_list->add_order($table_id, $food_id);
        $this->load->view('welcome_message');
    }
    public function order_list()
    {
        $this->load->model('pre_list');
        $list = $this->pre_list->get_list();
        $this->load->view('header');
        $this->load->view('order_list', compact('list'));
        $this->load->view('footer');
    }

    public function get_order_json()
    {
        header('Content-type: text/plain');
        header('Content-type: application/json');

        $this->load->model('pre_list');
        $list = $this->pre_list->get_list();
        foreach ($list as &$row) {
            $row['food_msg'] = base_url("resources/images/sushi_" . $row['food_id'] . ".jpg");
        }
        echo json_encode($list);
        return;
    }
}
