<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function seach()
	{

		$data['data']="Hello World";

		echo json_encode($data);
	}

}


?>