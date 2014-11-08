

<?php 

 if (is_array($results)) {

        foreach($results as $data) {
         $company_id =  $data->company_id;

    }
}

$company_id = array(
       'name'        => 'company_id',
       'id' => 'company_id',
       'value' => $company_id,
       'type' => 'hidden',
    );

$labelattributes = array(
    'class' => 'control-label',
);


$first_name = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'first_name',
    'name' => 'first_name',    
    'placeholder' => 'Enter First Name',

);


$last_name = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'last_name',
    'name' => 'last_name',    
    'placeholder' => 'Enter Last Name',

);

$position = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'position',
    'name' => 'position',    
    'placeholder' => 'Position',

);

$email = array(
    'class' => 'form-control',
    'type' => 'email',
    'id' => 'email',
    'name' => 'email',    
    'placeholder' => 'Enter email',
    'value' =>  set_value('email'), 
);




$linkedin = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'linkedin',
    'name' => 'linkedin',    
    'placeholder' => 'Enter Linkedin',

);


$xing = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'xing',
    'name' => 'xing',    
    'placeholder' => 'Enter xing',

);


$phone = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'phone',
    'name' => 'phone',    
    'placeholder' => 'Enter Phone',

);




?>


  <div class="page-header">
        <h1>Thumbnails</h1>

      </div>

 <?php echo form_open('add_data/add_employer_info'); ?>


<h2>Add User</h2>


    <?php echo form_input($company_id); ?>
    
     <div class="form-group">
	    <?php echo form_label('first name','', $labelattributes); ?>
	    <?php echo form_input($first_name); ?>
		<?php echo form_error('first_name'); ?>
    </div>

        <div class="form-group">
	    <?php echo form_label('last name','', $labelattributes); ?>
	    <?php echo form_input($last_name); ?>
		<?php echo form_error('last_name'); ?>
    </div>

    <div class="form-group">
	    <?php echo form_label('position','', $labelattributes); ?>
	    <?php echo form_input($position); ?>
		<?php echo form_error('position'); ?>
    </div>

     <div class="form-group">
	    <?php echo form_label('email','', $labelattributes); ?>
	    <?php echo form_input($email); ?>
		<?php echo form_error('email'); ?>
    </div>



    <div class="form-group">
        <?php echo form_label('linked','', $labelattributes); ?>
        <?php echo form_input($linkedin); ?>
        <?php echo form_error('linked'); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('xing','', $labelattributes); ?>
        <?php echo form_input($xing); ?>
        <?php echo form_error('xing'); ?>
    </div>

     <div class="form-group">
	    <?php echo form_label('Phone','', $labelattributes); ?>
	    <?php echo form_input($phone); ?>
		<?php echo form_error('Phone'); ?>
    </div>


    


	<?php  echo form_submit('submit', 'Submit', 'class="btn btn-default btn-lg", type="button"');	   ?>		 
  	<?php echo form_close();?>

