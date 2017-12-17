<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Manage Users');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
$paginator = $this->Paginator;
?>

<section class="content-header">
      <h1>
        Manage Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Users</a></li>
        <li class="active">Manage Users</li>
      </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<?php 
					echo $this->Html->link(
						$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-plus')), 
						array('controller' => 'Users', 'action' => 'add'), 
						array(
						'class'=>'btn btn-sm btn-success',
						'title' => 'Add user',
						'escape' => false), 
					false);
					?>
				</div>
				<div class="box-body">
					<?php echo $this->Flash->render(); ?>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th> <?php echo $paginator->sort('id', 'Sno');?> </th>
									<th> <?php echo $paginator->sort('firstname', 'Firstname');?> </th>
									<th> <?php echo $paginator->sort('lastname', 'Lastname');?> </th>
									<th> <?php echo $paginator->sort('email', 'Email');?> </th>
									<th> <?php echo $paginator->sort('dob', 'Date of birth');?> </th>
									<th> <?php echo $paginator->sort('doj', 'Date of joining');?> </th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php $start = $paginator->counter(array('format' => '%start%'));
							foreach ($users as $user) : 
							$user_id = $user['User']['id'];
							?>
							<tr>
								<td><?php echo $start;?></td>
								<td><?php echo $user['User']['firstname'];?></td>
								<td><?php echo $user['User']['lastname'];?></td>
								<td><?php echo $user['User']['email'];?></td>
								<td><?php echo $user['User']['dob'];?></td>
								<td><?php echo $user['User']['doj'];?></td>
								<td>
									<?php 
									echo $this->Html->link(
										$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-info-sign')), 
										array('controller' => 'Users', 'action' => 'view/'.$user_id), 
										array(
										'class'=>'btn btn-sm btn-primary mar_right5',
										'title' => 'View user',
										'escape' => false), 
									false);

									echo $this->Html->link(
										$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-edit')), 
										array('controller' => 'Users', 'action' => 'edit/'.$user_id), 
										array(
										'class'=>'btn btn-sm btn-success mar_right5',
										'title' => 'Edit user',
										'escape' => false), 
									false);

									
									echo $this->Html->link(
										$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove-circle')), 
										'#', 
										array(
										'class'=>'btn btn-sm btn-danger btn-confirm ',
										'title' => 'Delete user',
										'onclick' => 'deleteModal('.$user_id.')',
										'escape' => false), 
									false);
									?>
								</td>
							</tr>
							<?php $start++;
							endforeach;
							unset($user);
							?>
							</tbody>	
						</table>

						<div class="pagination pagination-large">
							<ul class="pagination">
								<?php
									echo $this->Paginator->prev(__('Prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
									echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
									echo $this->Paginator->next(__('Next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
								?>
							</ul>
						</div>		
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>



<!-- Modal confirm -->
<div class="modal" id="ConfirmDelete" style="display: none; z-index: 1050;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body" id="confirmMessage">
				Are you sure want to delete this record?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" id="confirmOk">Ok</button>
				<button type="button" class="btn btn-sm btn-danger" id="confirmCancel">Cancel</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	// function deleteModal(id) 
	// {
	// 	$("#ConfirmDelete").modal('show');	
	// 	$("#confirmOk").attr('data-user', id);
	// }
	// $("#confirmOk").click(function() {
	// 	var userId = $("#confirmOk").attr('data-user');
	// 	window.location.href= "<?php echo $this->webroot;?>Users/delete/"+userId;
	// });
	// $("#confirmCancel").click(function() {
	// 	$("#ConfirmDelete").modal('hide');
	// });
</script>
