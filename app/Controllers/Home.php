<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;

	public function index()
	{
	    if (ENVIRONMENT === 'development') {
	        $phpVersion = phpversion();
        } else {
            $phpVersion = 'secret';
        }

        return $this->respond([
            'status' => 'on',
            'php_version' => $phpVersion
        ]);
	}

	//--------------------------------------------------------------------

}
