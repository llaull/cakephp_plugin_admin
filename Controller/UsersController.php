<?php
class UsersController extends AdminAppController {

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	function index(){

		$d['user'] = $this->User->find('all');
		$this->set($d);

	}


}
?>