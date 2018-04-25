<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RichFilemanager extends CI_Controller {
    public function __construct(){
		parent::__construct();		
		$this->load->library('RichFilemanagerLib','richfilemanagerlib');
    }
    
	public function index()
	{        
        $this->load->view('RichFilemanager/index');
    }
    
    public function local()
	{
        $this->richfilemanagerlib->local()->run();
        $this->load->view('RichFilemanager/index');
    }
    
    public function s3()
	{
        $this->richfilemanagerlib->s3()->run();
        $this->load->view('RichFilemanager/index');
	}
}
