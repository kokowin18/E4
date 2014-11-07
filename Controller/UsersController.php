<?php

class UsersController extends AppController{

	public function index(){
	
		$users = $this->User->find('all');
		//pr($users);
		$this->set('users', $users);
	}
	
	public function add(){
	
		if( $this->request->is('post')){
		
			$this->User->save( $this->request->data);
		}
	}	
	
	public function login(){
		
		if( $this->request->is('post')){
		
		//$user = $this->User->findByEmailAndPassword($this->request->data('User.email'),$this->request->data('User.password')); //method 2
		
		/*$user = $this->User->find('first',array(
			'conditions'=>array(
				'email' => $this->request->data('User.email'),
				'password'=> $this->request->data('User.password')
			)
		));*///email and password login
		
		$user = $this->User->find('first',array(
			'conditions'=>array(
				'aycode' => $this->request->data('User.aycode'),
				'last_name'=> $this->request->data('User.last_name')
			)
		)); //aycode and lastname login
		
		/*$user = $this->User->find('first',array(
			'conditions'=>array(
				'email' => $this->request->data('User.email'),
				'aycode'=> $this->request->data('User.aycode')
			)
		));*/ //email and aycode login
		//debug($user);
		
			if( $user) {
				$this->Session->write('User',$user);
				$this->redirect(array('controller' => 'users', 'action'=> 'index'));
			}
			
			$this->Session->setFlash('Aycode and Lastname are not match.');
		}
		
	}
}
?>