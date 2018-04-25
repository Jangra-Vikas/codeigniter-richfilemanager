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
    
    public function localAPI()
	{
                $app = new \RFM\Application();
                // local filesystem storage
                $local = new \RFM\Repository\Local\Storage($this->richfilemanagerlib->RICH_FILE_MANAGER_CONFIG["local"]);
                $app->setStorage($local);        
                // local filesystem API
                $app->api = new \RFM\Api\LocalApi();
                $app->run();
    }
    
    public function s3()
	{
        $this->richfilemanagerlib->s3()->run();        
    }
    
    
}
