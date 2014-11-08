

<?php 
$labelattributes = array(
    'class' => 'control-label',
);

$company = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'company',
    'name' => 'company',    
    'placeholder' => 'Enter company',

);


$email = array(
    'class' => 'form-control',
    'type' => 'email',
    'id' => 'email',
    'name' => 'email',    
    'placeholder' => 'Enter email',
    'value' =>  set_value('email'), 
);


$website = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'website',
    'name' => 'website',    
    'placeholder' => 'Enter Website',

);



$phone = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'phone',
    'name' => 'phone',    
    'placeholder' => 'Enter Phone',

);


$street = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => '',
     'placeholder' => 'Street', 
     'name' => 'street',    

);



$city = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => '',
     'placeholder' => 'City', 
     'name' => 'city',    


);
$plz = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'plz',
     'placeholder' => 'postal code', 
     'name' => 'plz',    

);



?>


 <?php echo form_open('add_data/add_company_info'); ?>


<h2>Add Company Info</h2>

     <div class="form-group">
	    <?php echo form_label('company','', $labelattributes); ?>
	    <?php echo form_input($company); ?>
		<?php echo form_error('company'); ?>
    </div>



     <div class="form-group">
	    <?php echo form_label('email','', $labelattributes); ?>
	    <?php echo form_input($email); ?>
		<?php echo form_error('email'); ?>
    </div>

     <div class="form-group">
        <?php echo form_label('website','', $labelattributes); ?>
        <?php echo form_input($website); ?>
        <?php echo form_error('website'); ?>
    </div>

 

     <div class="form-group">
	    <?php echo form_label('Phone','', $labelattributes); ?>
	    <?php echo form_input($phone); ?>
		<?php echo form_error('Phone'); ?>
    </div>

     <div class="form-group">
	    <?php echo form_label('street','', $labelattributes); ?>
	    <?php echo form_input($street); ?>
		<?php echo form_error('street'); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Postal Code','', $labelattributes); ?>
        <?php echo form_input($plz); ?>
        <?php echo form_error('Postal Code'); ?>
    </div>

    <div class="form-group">
	    <?php echo form_label('city','', $labelattributes); ?>
	    <?php echo form_input($city); ?>
		<?php echo form_error('stadt'); ?>
    </div>



 


	<?php  echo form_submit('submit', 'Submit', 'class="btn btn-default btn-lg", type="button"');	   ?>		 
  	<?php echo form_close();?>

