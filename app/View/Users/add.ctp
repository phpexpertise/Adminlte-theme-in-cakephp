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

$cakeDescription = __d('cake_dev', 'CakePHP: Add user');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<section class="content-header">
      <h1>
        Add User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/users/index">Users</a></li>
        <li class="active">Add User</li>
      </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-primary">
				<div class="box-body">
					<?php
						echo $this->Form->create('User', array(
							'class' => 'form-horizontal',
							'formnovalidate' => true
						));

						echo $this->Form->input('firstname', array(
							'required' => false,
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
						echo $this->Form->input('lastname', array(
							'required' => false,
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
						echo $this->Form->input('email', array(
							'required' => false,
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
						echo $this->Form->input('dob', array(
							'required' => false,
							'class' => 'form-control datepicker',
							'id' => 'dob',
							'type' => 'text',
							'label' => array('class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));

						$options = array('male' => 'Male', 'female' => 'Female');
						$attributes = array(
							'legend' => false,
							'required' => false,
						);

						echo '<div class="form-group">
							<label class="col-sm-2 control-label">Gender</label>
							<div class="col-md-3">';
						echo $this->Form->radio('gender', $options, $attributes, array(
							'class' => 'radio-inline',
							'label' => array('class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
						echo '</div>';
						if ($this->Form->isFieldError('gender')){
							echo $this->Form->error('gender');
						}
						echo '</div>';

						echo $this->Form->input('address', array(
							'required' => false,
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));

						$options = $countries;
						echo $this->Form->input('country', array(
							'required' => false,
							'type' => 'select',
							'onChange' => 'getStates(this.value)',
							'label' => false,
							'options' => $options,
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));

						$options = array('' => '--Select one--');
						echo $this->Form->input('state', array(
							'required' => false,
							'type' => 'select',
							'id' => 'states',
							'label' => false,
							'options' => $options,
							'onChange' => 'getCity(this.value)',
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));

						$options = array('' => '--Select one--');
						echo $this->Form->input('city' ,array(
							'required' => false,
							'type' => 'select',
							'label' => false,
							'options' => $options,
							'id' => 'cities',
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));

						echo $this->Form->input('doj', array(
							'required' => false,
							'class' => 'form-control datepicker',
							'id' => 'doj',
							'type' => 'text',
							'label' => array('class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));

						echo $this->Form->input('salary', array(
							'required' => false,
							'class' => 'form-control',
							'type' => 'text',
							'label' => array('class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));

						echo $this->Form->input('id', array('type' => 'hidden'));

						echo '<div class="col-sm-offset-2 col-sm-10">';
						echo $this->Form->submit('submit', array(
							'div' => false,
							'class' => 'btn btn-sm btn-primary mar_right5'
						));

						echo $this->Form->button('Cancel', array(
							'type'=>'button',
							'class' => 'btn btn-sm btn-danger',
							'div' => false,
							'onclick' => 'cancelFrm();'
						));
						echo '</div>';

						echo $this->Form->end();
						?>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
$(document).ready(function(){
	$("#dob").datepicker({
		minDate: new Date(1900,1-1,1), maxDate: '-18Y',
		dateFormat: 'yy-mm-dd',
		changeMonth: true,
		changeYear: true,
		yearRange: '-110:-18'
	});

	$("#doj").datepicker({
		dateFormat: 'yy-mm-dd',
		maxDate: 0,
		changeMonth: true,
		changeYear: true,
	});
});

function getStates(id)
{
	if (id) {
		$.ajax({
			url: "<?php echo $this->webroot;?>Users/getStates/"+id,
			type: "get",
			dataType: "json",
			success: function(response) {
				var html = '<option value="">--Select one--</option>';
				$.each(response, function(key, index){
					html +='<option value="'+key+'">'+index+'</option>';
				});
				$("#states").html(html);
			}
		});
	} else {
		alert("Please select country");
	}
}

function getCity(id)
{
	if (id) {
		$.ajax({
			url: "<?php echo $this->webroot;?>Users/getCity/"+id,
			type: "get",
			dataType: "json",
			success: function(response) {
				var html = '<option value="">--Select one--</option>';
				$.each(response, function(key, index){
					html +='<option value="'+key+'">'+index+'</option>';					
				});
				$("#cities").html(html);
			}
		});
	} else {
		alert("Please select state");
	}
}

function cancelFrm()
{
	window.location.href = "<?php echo $this->webroot;?>Users/index";
}
</script>