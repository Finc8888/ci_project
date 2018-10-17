<?php 
class Blog extends CI_Controller{
// public function __construct(){
// 	parent::construct();
// }	

public function greating($name){
	echo "Hello world ".$name. "!";
}

// public function _remap($method, $params = array())
// {echo __FUNCTION__;
// 	if ($method === 'greating')
// 	{
// 		$this->$method($params[0]);
// 	}
// 	else
// 	{
// 		$this->buy($params[0]);
// 	}
// }

public function buy($name){
	echo "Take care ".$name. "!";
}


public function _remap($method, $params = array())
{
	// $method =$method;
	if (method_exists($this, $method))
	{
		return call_user_func_array(array($this, $method), $params);
	}
	show_404();
}

public function _output($output)
{
	if ($this->output->cache_expiration > 0)
{
	$this->output->_write_cache($output);
}
}


}