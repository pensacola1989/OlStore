<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Home extends CI_Controller
{
	
	// private $val;

	public function index()
	{
		$this->load->view('home');
	}
}