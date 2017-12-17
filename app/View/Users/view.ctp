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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<section class="content-header">
      <h1>
        View <?php echo $user['User']['firstname'];?>'s Information:
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/users/index">Users</a></li>
        <li class="active">View <?php echo $user['User']['firstname'];?>'s Information</li>
      </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-primary">
				<div class="box-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-responsive">
								<table class="table table-striped">	
									<tr>
										<td>First name: <?php echo $user['User']['firstname'];?></td>
									</tr>
									<tr>
										<td>Last name: <?php echo $user['User']['lastname'];?></td>
									</tr>
									<tr>
										<td>Email: <?php echo $user['User']['email'];?></td>
									</tr>
									<tr>
										<td>Date of birth: <?php echo $user['User']['dob'];?></td>
									</tr>
									<tr>
										<td>Gender: <?php echo $user['User']['gender'];?></td>
									</tr>
									<tr>
										<td>Address: <?php echo $user['User']['address'];?></td>
									</tr>
									<tr>
										<td>Country: <?php echo $countries[$user['User']['country']];?></td>
									</tr>
									<tr>
										<td>State: <?php echo $states[$user['User']['state']];?></td>
									</tr>
									<tr>
										<td>City: <?php echo $cities[$user['User']['city']];?></td>
									</tr>
									<tr>
										<td>Date of birth: <?php echo $user['User']['doj'];?></td>
									</tr>
										<td>Salary: <?php echo $user['User']['salary'];?></td>
									</tr>
								</table>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>			
