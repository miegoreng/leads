

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


$website = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'website',
    'name' => 'website',    
    'placeholder' => 'Enter Website',

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
$postal_code = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'postal_code',
     'placeholder' => 'postal code', 
     'name' => 'postal_code',    

);



$date = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'date',
     'placeholder' => 'When to call', 
     'name' => 'date',    

);


$time = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => 'time',
     'placeholder' => 'Time', 
     'name' => 'time',    

);

$notes = array(
    'class' => 'form-control',
    'type' => 'text',
    'id' => '',
     'placeholder' => 'Write something', 
     'name' => 'notes',    

);

?>

  <div class="page-header">
        <h1>Thumbnails</h1>
      </div>

 <?php echo form_open('add_data/add_contact_record'); ?>


<h2>Add User</h2>

     <div class="form-group">
	    <?php echo form_label('company','', $labelattributes); ?>
	    <?php echo form_input($company); ?>
		<?php echo form_error('company'); ?>
    </div>

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
        <?php echo form_label('website','', $labelattributes); ?>
        <?php echo form_input($website); ?>
        <?php echo form_error('website'); ?>
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

     <div class="form-group">
	    <?php echo form_label('street','', $labelattributes); ?>
	    <?php echo form_input($street); ?>
		<?php echo form_error('street'); ?>
    </div>



    <div class="form-group">
	    <?php echo form_label('city','', $labelattributes); ?>
	    <?php echo form_input($city); ?>
		<?php echo form_error('stadt'); ?>
    </div>

    <div class="form-group">
	    <?php echo form_label('Postal Code','', $labelattributes); ?>
	    <?php echo form_input($postal_code); ?>
		<?php echo form_error('Postal Code'); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Date','', $labelattributes); ?>
        <div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
        <?php echo form_input($date); ?>
                   <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                   <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        <?php echo form_error('Date'); ?>
         </div> 
     </div>

    <div class="form-group">
        <?php echo form_label('Time','', $labelattributes); ?>
                <div class="input-group date form_time col-md-12" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
        <?php echo form_input($time); ?>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
        <?php echo form_error('Time'); ?>
         </div> 
     </div>
      




    <div class="form-group">
        <?php echo form_label('Notes','', $labelattributes); ?>
        <?php echo form_textarea($notes); ?>
        <?php echo form_error('notes'); ?>
    </div>





	<?php  echo form_submit('submit', 'Submit', 'class="btn btn-default btn-lg", type="button"');	   ?>		 
  	<?php echo form_close();?>

