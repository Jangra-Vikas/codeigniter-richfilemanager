<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RichFilemanagerLib
{

        public $RICH_FILE_MANAGER_CONFIG = array();
    
	function __construct($config = array())
	{	
        
                $this->RICH_FILE_MANAGER_CONFIG = $config;                
		log_message('info', 'RichFilemanagerLib Class Initalized');
	}

	public function local()
	{

                $app = new \RFM\Application();
                // local filesystem storage
                $local = new \RFM\Repository\Local\Storage($this->RICH_FILE_MANAGER_CONFIG["local"]);
                $app->setStorage($local);        
                // local filesystem API
                $app->api = new \RFM\Api\LocalApi();

                return $app;
	}

	public function s3()
	{
                array_merge($this->RICH_FILE_MANAGER_CONFIG->local, $this->RICH_FILE_MANAGER_CONFIG->s3);
		$app = new \RFM\Application();
                // AWS S3 storage instance
                $s3 = new \RFM\Repository\S3\Storage($this->RICH_FILE_MANAGER_CONFIG["s3"]);
                $app->setStorage($s3);        
                // AWS S3 API
                $app->api = new RFM\Api\AwsS3Api();
                return $app;
        }
        
        function fm_authenticate()
        {
                // Customize this code as desired.
                return true;
        }

        function fm_has_read_permission($filepath)
        {
                // Customize this code as desired.
                return true;
        }

        function fm_has_write_permission($filepath)
        {
                // Customize this code as desired.
                return true;
        }
}

/* End of file RichFilemanagerLib.php */
/* Location: ./application/libraries/RichFilemanagerLib.php */