<h2>Administration Login</h2>

<?php
	echo $this->Form->create();
	echo $this->Form->input('username');
	//echo $this->Form->input('email');
	echo $this->Form->input('password');
	//echo $this->Form->input('aycode');
	//echo $this->Form->input('last_name');
	echo $this->Form->end('Login');
?>