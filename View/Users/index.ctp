<h2>All the users</h2>
<h1>Lottery School Applications</h1>

<table>
	<tr>
		<th>First name</th>
		<th>Last name</th>
		<th>Email</th>
	</tr>
	
	<?php foreach($users as $user): ?>
	
	<tr>
		<td><?php echo $user['User']['first_name'];?></td>
		<td><?php echo $user['User']['last_name'];?></td>
		<td><?php echo $user['User']['email'];?></td>
	</tr>
	
	<?php endforeach ?>
	
</table>




